<!DOCTYPE html>
<html>
<head>
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
<meta name="author" content="anibalgomez@icloud.com">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Setup Wizard - Balero CMS</title>
    <!-- Bootstrap -->
    <link href="wizard/bootstrap.css" rel="stylesheet">
    <link href="wizard/prettify.css" rel="stylesheet">

    <!-- Installer CSS -->
    <link href="wizard/main.css" rel="stylesheet">

    <!-- Icon URL -->
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
    <div class="container">
        
        <div class="span9">
            <section id="wizard">
              <div class="page-header">
                <img src="images/logo.png">
              </div>
                
                <div id="tabsleft" class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tabsleft-tab1" data-toggle="tab">
                            {{Lang::get('installer.welcome')}}</a></li>
                        <li class=""><a href="#tabsleft-tab2" data-toggle="tab">Database Config.</a></li>
                        <li class=""><a href="#tabsleft-tab3" data-toggle="tab">Site Setup</a></li>
                        <li class=""><a href="#tabsleft-tab4" data-toggle="tab">Administrator</a></li>
                        <li><a href="#tabsleft-tab6" data-toggle="tab">License</a></li>
                        <li><a href="#tabsleft-tab7" data-toggle="tab">Finish</a></li>
                    </ul>
                    <div class="progress progress-info progress-striped">
                      <div style="width: 42.8571%;" class="bar"></div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabsleft-tab1">
                          <p>{{Lang::get('installer.welcome-message')}}
                            <br />
                            <a href="https://bitnami.com/stack/balerocms">
                            bitnami.com
                            </a>
                            </p>
                        </div>
                        <div class="tab-pane" id="tabsleft-tab2">
                          <form>
                            <div class="input-group">
                              <span class="input-group-addon">Database Host</span>
                              <input type="text" class="form-control">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon">Database Host</span>
                              <input type="text" class="form-control">
                            </div>
                          </form>
                        </div>
                        <div class="tab-pane" id="tabsleft-tab3">
                            3
                        </div>
                        <div class="tab-pane" id="tabsleft-tab4">
                            4
                        </div>
                        <div class="tab-pane" id="tabsleft-tab5">
                            5
                        </div>
                        <div class="tab-pane" id="tabsleft-tab6">
                            <textarea style="width: 95%; height: 300px">
                            The MIT License (MIT)

                            Copyright (c) 2014 BaleroCMS

                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:

                            The above copyright notice and this permission notice shall be included in all
                            copies or substantial portions of the Software.

                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                            SOFTWARE.
                            </textarea>
                        </div>
                        <div class="tab-pane" id="tabsleft-tab7">
                            Finish install
                        </div>
                        <ul class="pager wizard">
                            <li class="next last"><a href="javascript:;">Last</a></li>
                            <li class="next"><a href="javascript:;">Next</a></li>
                            <li class="next finish" style="display: none;"><a href="javascript:;">Finish</a></li>
                        </ul>
                    </div>  
                </div>
                
            </section>
        </div>

    <div id="footer">
        Copyright (c) 2014 <a href="http://balerocms.com/">BaleroCMS</a>.
    </div>

    </div>
    <script src="wizard/jquery-latest.js"></script>
    <script src="wizard/bootstrap.js"></script>
    <script src="wizard/jquery.js"></script>
    <script src="wizard/prettify.js"></script>
    <script>
    $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({'tabClass': 'nav', 'debug': false, onShow: function(tab, navigation, index) {
                console.log('onShow');
            }, onNext: function(tab, navigation, index) {
                console.log('onNext');
            }, onPrevious: function(tab, navigation, index) {
                console.log('onPrevious');
            }, onLast: function(tab, navigation, index) {
                console.log('onLast');
            }, onTabClick: function(tab, navigation, index) {
                console.log('onTabClick');
                alert('on tab click disabled');
            }, onTabShow: function(tab, navigation, index) {
                console.log('onTabShow');
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
            }});
            
            $('#tabsleft').bootstrapWizard({'tabClass': 'nav nav-tabs', 'debug': false, onShow: function(tab, navigation, index) {
                        console.log('onShow');
                    }, onNext: function(tab, navigation, index) {
                        console.log('onNext');
                    }, onPrevious: function(tab, navigation, index) {
                        console.log('onPrevious');
                    }, onLast: function(tab, navigation, index) {
                        console.log('onLast');
                    }, onTabClick: function(tab, navigation, index) {
                        console.log('onTabClick');
                        
                    }, onTabShow: function(tab, navigation, index) {
                        console.log('onTabShow');
                        var $total = navigation.find('li').length;
                        var $current = index+1;
                        var $percent = ($current/$total) * 100;
                        $('#tabsleft').find('.bar').css({width:$percent+'%'});
                        
                        // If it's the last tab then hide the last button and show the finish instead
                        if($current >= $total) {
                            $('#tabsleft').find('.pager .next').hide();
                            $('#tabsleft').find('.pager .finish').show();
                            $('#tabsleft').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#tabsleft').find('.pager .next').show();
                            $('#tabsleft').find('.pager .finish').hide();
                        }
                        
                    }});
                
                $('#tabsleft .finish').click(function() {
                    alert('Finished!, Starting over!');
                    $('#tabsleft').find("a[href*='tabsleft-tab1']").trigger('click');
                }); 
                    
        });
    </script>
  
</body>
</html>