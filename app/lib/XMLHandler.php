<?php

class XMLHandler {
	
	/**
	 * Input file.
	 *
	 * @var string
	 */
	protected $file;

	/**
	 * XMK object instance.
	 *
	 * @var string
	 */
	public $obj;

	/**
	 * (c) Anibal Gomez <anibalgomez@icloud.com>
	 *
	 * @param  string  $file
	 * @return void
	 */
	public function __construct($file = '')
	{
		$this->file = $file;
	}

	/**
	 * Load and create XML object.
	 * phpeveryday.com/articles/PHP-XML-Read-from-a-File-P410.html
	 *
	 * @return void
	 */
	public function load()
	{
		 // Load XML
		if (file_exists($this->file))
		{
			// Create object
			$this->obj = simplexml_load_file($file);
		}
		else
		{
			$this->obj = null;
		}
	}
	
	/**
	 * Get XML value.
	 *
	 * @param  string  $child
	 * @param  string  $subchild
	 * @return string
	 */
	public function get($child, $subchild)
	{
		if($this->obj)
		{
			$value = 0;
			foreach($this->obj->$child as $key => $subValue)
			{
				$value = $subValue->$subchild;
				if($value == '_blank')
				{
					$value = '';
				}
			}
		}
		else
		{
			$value = null;
		}
		return $value;	
	}
	
	/**
	 * Set XML value.
	 *
	 * @param  string  $path
	 * @param  string  $value
	 * @return void
	 */
	public function set($path, $value)
	{
		$node = $this->obj->xpath($path);
		if(empty($value))
		{
			$node[0][0] = "_blank";
		}
		else
		{
			$node[0][0] = htmlspecialchars($value);
		}
		$this->obj->asXML($this->file);
	}
	
	/**
	 * Free memory.
	 *
	 * @return void
	 */
 	public function __destruct()
 	{
 		unset($this);
 	}
}
