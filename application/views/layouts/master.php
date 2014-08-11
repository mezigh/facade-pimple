<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title><?php echo $title; ?> Almost Flat UI</title>

        <link rel="stylesheet" href="http://localhost:8888/stylesheets/normalize.css" />
        <link rel="stylesheet" href="http://localhost:8888/stylesheets/app.css" />

        <script src="http://localhost:8888/javascripts/vendor/custom.modernizr.js"></script>

    </head>
    <body>
        
        
        
        
        <nav role="navigation" class="navigation">
            <div class="navigation-container">
                <ul class="logo-navigation">
                    <li>
                        <a href="/" title="Devmedia"><?php echo $title; ?></a>
                    </li>
                </ul>
                <ul class="main-navigation">
                    <li><a href="/json">Json</a></li>
                    <li><a href="/cms" class="active">CMS</a></li>
                    <li><a href="/soon">Soon</a></li>
                    <li><a href="/bye">Bye</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        </nav>


        
        <div class="row">
            <div class="large-12 columns text-center" style="padding-top:60px;padding-bottom: 30px;">
                <img src="http://localhost:8888/images/almost_flat_ui.png" alt="">
                <h1 style="font-size: 32px;">CMS build with Symfony 2 and Laravel 4 components<br>
                    <small>with almost Flat UI(Based on Foundation Framework)</small>
                </h1>
                <div class="row">
                    <div class="large-6 columns">
                        <?php echo '<pre>';
                        echo $content; ?>
                    </div>

                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="large-9 push-3 columns">
                <h4 class="text-center">Navigation</h4>
                <hr>
                <div class="row" id="doc-pagination">
                    <div class="large-12 columns">
                        <h5>Pagination</h5>
                        <ul class="pagination">
                            <li class="arrow unavailable"><a href="">«</a></li>
                            <li class="current"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li class="unavailable"><a href="">…</a></li>
                            <li><a href="">12</a></li>
                            <li><a href="">13</a></li>
                            <li class="arrow"><a href="">»</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row" id="doc-sidenav">
                    <div class="large-12 columns">
                        <h5>Side Nav</h5>
                        <div class="row">
                            <div class="large-4 columns end">
                                <ul class="side-nav">
                                    <li class="active"><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Link 3</a></li>
                                    <li><a href="#">Link 4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" id="doc-subnav">
                    <div class="large-12 columns">
                        <h5>Sub Nav</h5>
                        <dl class="sub-nav">
                            <dt>Filter:</dt>
                            <dd class="active"><a href="#">All</a></dd>
                            <dd><a href="#">Active</a></dd>
                            <dd><a href="#">Pending</a></dd>
                            <dd><a href="#">Suspended</a></dd>
                        </dl>
                    </div>
                </div>
                <hr>
                <div class="row" id="doc-topbar">
                    <div class="large-12 columns">
                        <h5>Top Bar</h5>
                        <nav class="top-bar">
                            <ul class="title-area">
                                <!-- Title Area -->
                                <li class="name">
                                    <h1><a href="#">Top Bar</a></h1>
                                </li>
                                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                            </ul>

                            <section class="top-bar-section">
                                <ul class="left">
                                    <li class="divider"></li>
                                    <li class="has-dropdown"><a href="#">Item 1</a>

                                        <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                                            <li><label>Level One</label></li>
                                            <li><a href="#">Sub-item 1</a></li>
                                            <li><a href="#">Sub-item 2</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Sub-item 3</a></li>
                                            <li class="has-dropdown"><a href="#">Sub-item 4</a>

                                                <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                                                    <li><label>Level Two</label></li>
                                                    <li class="has-dropdown"><a href="#">Sub-item 1</a>

                                                        <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                                                            <li><label>Level Three</label></li>
                                                            <li class="has-dropdown"><a href="#">Sub-item 1</a>

                                                                <ul class="dropdown"><li class="title back js-generated"><h5><a href="#">« Back</a></h5></li>
                                                                    <li><label>Level Four</label></li>
                                                                    <li><a href="#">Sub-item 1</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Sub-item 2</a></li>
                                                            <li><a href="#">Sub-item 3</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Sub-item 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Sub-item 2</a></li>
                                                    <li><a href="#">Sub-item 3</a></li>
                                                    <li><a href="#">Sub-item 4</a>
                                                    </li></ul>
                                            </li>
                                            <li><a href="#">Sub-item 5</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                </ul>
                                <!-- Right Nav Section -->
                                <ul class="right">
                                    <li class="divider hide-for-small"></li>
                                    <li><a href="#">Messages <span class="top-bar-unread">3</span></a></li>
                                    <li class="divider hide-for-small"></li>
                                    <li><a href="#">Item 2</a></li>
                                </ul>
                            </section></nav>

                    </div>
                </div>
                <hr>
                <div class="row" id="doc-breadcrumbs">
                    <div class="large-12 columns">
                        <h5>Breadcrumbs</h5>
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li class="unavailable"><a href="#">Gene Splicing</a></li>
                            <li class="current"><a href="#">Cloning</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <!-- <div class="row">
                   <div class="large-12 columns">
                     <h4 class="text-center">Buttons</h4>
                     <hr>
                     <h5> Almost Flat Buttons</h5>
                     <table id="doc-almost-flat-buttons">
                       <thead>
                         <tr>
                           <th style="width:30%">Button</th>
                           <th style="width:30%">class=""</th>
                           <th>Description</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td><button type="button" class="button primary">Primary</button></td>
                           <td><code>button primary</code></td>
                           <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button primary-dark">Primary Dark</button></td>
                           <td><code>button primary-dark</code></td>
                           <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button secondary">Secondary</button></td>
                           <td><code>button secondary</code></td>
                           <td>Standard gray button with gradient</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button highlight">Highlight</button></td>
                           <td><code>button highlight</code></td>
                           <td>To highlight some extraordinary action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button highlight-dark">Highlight Dark</button></td>
                           <td><code>button highlight-dark</code></td>
                           <td>To highlight some extraordinary action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button info">Info</button></td>
                           <td><code>button info</code></td>
                           <td>Used as an alternative to the default styles</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button info-dark">Info Dark</button></td>
                           <td><code>button info-dark</code></td>
                           <td>Used as an alternative to the default styles</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button success">Success</button></td>
                           <td><code>button success</code></td>
                           <td>Indicates a successful or positive action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button success-dark">Success Dark</button></td>
                           <td><code>button success-dark</code></td>
                           <td>Indicates a successful or positive action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button success-darker">Success Darker</button></td>
                           <td><code>button success-darker</code></td>
                           <td>Indicates a successful or positive action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button success-darkest">Success Darkest</button></td>
                           <td><code>button success-darkest</code></td>
                           <td>Indicates a successful or positive action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button warning">Warning</button></td>
                           <td><code>button warning</code></td>
                           <td>Indicates caution should be taken with this action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button warning-dark">Warning Dark</button></td>
                           <td><code>button warning-dark</code></td>
                           <td>Indicates caution should be taken with this action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button alert">Alert</button></td>
                           <td><code>button alert</code></td>
                           <td>Indicates a dangerous or potentially negative action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button alert-dark">Alert Dark</button></td>
                           <td><code>button alert-dark</code></td>
                           <td>Indicates a dangerous or potentially negative action</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button inverse">Inverse</button></td>
                           <td><code>button inverse</code></td>
                           <td>Alternate dark gray button, not tied to a semantic action or use</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button inverse-dark">Inverse Dark</button></td>
                           <td><code>button inverse-dark</code></td>
                           <td>Alternate dark gray button, not tied to a semantic action or use</td>
                         </tr>
                       </tbody>
                     </table>
                     <hr>
                     <h5>Different Sizes</h5>
                     <table>
                       <thead>
                         <tr>
                           <th style="width:20%">Button</th>
                           <th style="width:20%">class=""</th>
                           <th>Description</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td><button type="button" class="button tiny">Tiny</button></td>
                           <td><code>button tiny</code></td>
                           <td>Tiny Button</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button small">Small</button></td>
                           <td><code>button small</code></td>
                           <td>Small Button</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button">Regular</button></td>
                           <td><code>button</code></td>
                           <td>Regular Button</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button large">Large</button></td>
                           <td><code>button large</code></td>
                           <td>Large Button</td>
                         </tr>
                       </tbody>
                     </table>
                     <hr>
                     <h5>Different Types</h5>
                     <table>
                       <thead>
                         <tr>
                           <th style="width:20%">Button</th>
                           <th style="width:20%">class=""</th>
                           <th>Description</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td><button type="button" class="button radius">Radius</button></td>
                           <td><code>button radius</code></td>
                           <td>Radius Button</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button round">Round</button></td>
                           <td><code>button round</code></td>
                           <td>Round Button</td>
                         </tr>
                         <tr>
                           <td><button type="button" class="button disabled">Disabled</button></td>
                           <td><code>button disabled</code></td>
                           <td>Disabled Button</td>
                         </tr>
                       </tbody>
                     </table>
                     <hr>
                     <div class="row" id="doc-almost-flat-button-groups">
                       <div class="large-12 columns">
                         <h5>Almost Flat Buttons Groups</h5>
                         <ul class="button-group">
                           <li><a href="#" class="small button">Button 1</a></li>
                           <li><a href="#" class="small button">Button 2</a></li>
                           <li><a href="#" class="small button">Button 3</a></li>
                         </ul>
                         <ul class="button-group radius">
                           <li><a href="#" class="button secondary">Button 1</a></li>
                           <li><a href="#" class="button secondary">Button 2</a></li>
                           <li><a href="#" class="button secondary">Button 3</a></li>
                           <li><a href="#" class="button secondary">Button 4</a></li>
                         </ul>
                         <ul class="button-group round even-3">
                           <li><a href="#" class="button alert">Button 1</a></li>
                           <li><a href="#" class="button alert">Button 2</a></li>
                           <li><a href="#" class="button alert">Button 3</a></li>
                         </ul>
                         <ul class="button-group round even-3">
                           <li><input type="submit" class="button success" value="Button 1"></li>
                           <li><input type="submit" class="button success" value="Button 2"></li>
                           <li><input type="submit" class="button success" value="Button 3"></li>
                         </ul>
                       </div>
                     </div>
                   </div>
                 </div> Buttons End-->
                <!--<hr>
                <div class="row" id="doc-forms">
                  <div class="large-12 columns">
                    <h3 class="text-center">Forms</h3>
                    <hr>
                    <form class="custom">
                      <fieldset>
                        <legend>Fieldset</legend>
          
                        <div class="row">
                          <div class="large-12 columns">
                            <label>Input Label</label>
                            <input type="text" placeholder="large-12.columns">
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="large-4 columns">
                            <label>Input Label</label>
                            <input type="text" placeholder="large-4.columns">
                          </div>
                          <div class="large-4 columns">
                            <div class="row collapse">
                              <label>Input Label</label>
                              <div class="small-3 columns">
                                <span class="prefix">http://</span>
                              </div>
                              <div class="small-9 columns">
                                <input type="text" placeholder="small-9.columns">
                              </div>
                            </div>
                          </div>
                          <div class="large-4 columns">
                            <div class="row collapse">
                              <label>Input Label</label>
                              <div class="small-9 columns">
                                <input type="text" placeholder="small-9.columns">
                              </div>
                              <div class="small-3 columns">
                                <span class="postfix">.com</span>
                              </div>
                            </div>
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="large-12 columns">
                            <label>Textarea Label</label>
                            <textarea placeholder="small-12.columns"></textarea>
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="large-6 columns">
                            <label class="error">Error</label>
                            <input type="text" class="error">
                            <small class="error">Invalid entry</small>
                          </div>
          
                          <div class="large-6 columns success">
                            <label>Success</label>
                            <input type="text">
                            <small>Valid entry</small>
                          </div>
                        </div>
          
                      </fieldset>
                    </form>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="large-12 columns">
                    <h4 class="text-center">Typography</h4>
                    <hr>
                    <div class="row" id="doc-type">
                      <h5>Type</h5>
                      <div class="large-12 columns">
          
                        <h1>h1. This is a very large header.</h1>
                        <h2>h2. This is a large header.</h2>
                        <h3>h3. This is a medium header.</h3>
                        <h4>h4. This is a moderate header.</h4>
                        <h5>h5. This is a small header. h1.</h5>
                        <h6>h6. This is a tiny header. h1.</h6>
          
          
                        <hr>
          
                        <h1 class="subheader">h1.subheader</h1>
                        <h2 class="subheader">h2.subheader</h2>
                        <h3 class="subheader">h3.subheader</h3>
                        <h4 class="subheader">h4.subheader</h4>
                        <h5 class="subheader">h5.subheader</h5>
                        <h6 class="subheader">h6.subheader</h6>
          
          
                        <hr>
          
                        <h1>h1. <small>Small segment header.</small></h1>
                        <h2>h2. <small>Small segment header.</small></h2>
                        <h3>h3. <small>Small segment header.</small></h3>
                        <h4>h4. <small>Small segment header.</small></h4>
                        <h5>h5. <small>Small segment header.</small></h5>
                        <h6>h6. <small>Small segment header.</small></h6>
          
          
          
          
                        <hr>
          
                        <p>This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm. To show what a paragraph looks like this needs a little more content so, did you know that there are storms occurring on Jupiter that are larger than the Earth? Pretty cool. Wrap <code>&lt;strong&gt;</code> around type to <strong>make it bold!</strong>. You can also use <code>&lt;em&gt;</code> to <em>italicize your words</em>.</p>
          
          
          
                        <hr>
          
                        <h6>Links</h6>
                        <p>Links are very standard, and the <a href="http://www.youtube.com/watch?v=oHg5SJYRHA0">color is preset</a> to the Foundation primary color.</p>
          
          
                        <hr>
          
                        <h6>Lists</h6>
                        <p>Lists are helpful for, well, lists of things.</p>
          
                        <div class="row">
                          <div class="large-4 columns">
                            <h6>ul.disc</h6>
                            <ul class="disc">
                              <li>List item with a much longer description or more content.</li>
                              <li>List item</li>
                              <li>List item
                                <ul>
                                  <li>Nested List Item</li>
                                  <li>Nested List Item</li>
                                  <li>Nested List Item</li>
                                </ul>
                              </li>
                              <li>List item</li>
                              <li>List item</li>
                              <li>List item</li>
                            </ul>
                          </div>
          
                          <div class="large-4 columns">
                            <h6>ul.circle</h6>
                            <ul class="circle">
                              <li>List item with a much longer description or more content.</li>
                              <li>List item</li>
                              <li>List item
                                <ul>
                                  <li>Nested List Item</li>
                                  <li>Nested List Item</li>
                                  <li>Nested List Item</li>
                                </ul>
                              </li>
                              <li>List item</li>
                              <li>List item</li>
                              <li>List item</li>
                            </ul>
                          </div>
          
                          <div class="large-4 columns">
                            <h6>ul.square</h6>
                            <ul class="square">
                              <li>List item with a much longer description or more content.</li>
                              <li>List item</li>
                              <li>List item
                                <ul>
                                  <li>Nested List Item</li>
                                  <li>Nested List Item</li>
                                  <li>Nested List Item</li>
                                </ul>
                              </li>
                              <li>List item</li>
                              <li>List item</li>
                              <li>List item</li>
                            </ul>
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="large-4 columns">
                            <h6>Ordered Lists</h6>
                            <ol>
                              <li>List Item 1</li>
                              <li>List Item 2
                                <ol>
                                  <li>Nested List Item</li>
                                  <li>Nested List Item</li>
                                  <li>Nested List Item</li>
                                </ol>
                              </li>
                              <li>List Item 3</li>
                            </ol>
                          </div>
                          <div class="large-8 columns">
                            <h6>Definition Lists</h6>
                            <dl>
                              <dt>Definition Title</dt>
                              <dd>Definition Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam id dolor id nibh ultricies vehicula ut id elit.</dd>
                            </dl>
                          </div>
                        </div>
          
          
                        <hr>
          
                        <a name="blockquotes"></a>
                        <h6>Blockquotes</h6>
                        <p>Sometimes other people say smart things, and you may want to mention that through a blockquote callout. We've got you covered.</p>
          
                        <blockquote>I do not fear computers. I fear the lack of them. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur.<cite>Isaac Asimov</cite></blockquote>
          
          
                        <hr>
          
                        <h6>V-Cards</h6>
                        <p>Here's a handy microformat-friendly list to <em>address</em> all your needs.</p>
          
                        <ul class="vcard">
                          <li class="fn">Gaius Baltar</li>
                          <li class="street-address">123 Colonial Ave.</li>
                          <li class="locality">Caprica City</li>
                          <li><span class="state">Caprica</span>, <span class="zip">12345</span></li>
                          <li class="email"><a href="#">g.baltar@cmail.com</a></li>
                        </ul>
          
                      </div>
                    </div>
                    <hr>
                    <div class="row" id="doc-labels">
                      <div class="large-12 columns">
                        <h5>Labels</h5>
                        <p>
                          <span class="label">Regular Label</span><br>
                          <span class="radius secondary label">Radius Secondary Label</span><br>
                          <span class="round alert label">Round Alert Label</span><br>
                          <span class="success label">Success Label</span><br>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="large-12 columns">
                    <h4 class="text-center">CSS Components</h4>
                    <hr>
                    <div class="row" id="doc-alert-boxes">
                      <div class="large-12 columns">
                        <h5>Alert Boxes</h5>
                        <div data-alert="" class="alert-box radius">
                          This is a standard alert (div.alert-box).
                          <a href="" class="close">×</a>
                        </div>
          
                        <div data-alert="" class="alert-box success">
                          This is a success alert (div.alert-box.success).
                          <a href="" class="close">×</a>
                        </div>
          
                        <div data-alert="" class="alert-box alert round">
                          This is an alert (div.alert-box.alert.round).
                          <a href="" class="close">×</a>
                        </div>
          
                        <div data-alert="" class="alert-box secondary">
                          This is a secondary alert (div.alert-box.secondary).
                          <a href="" class="close">×</a>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row" id="doc-panels">
                      <div class="large-12 columns">
                        <h5>Panels</h5>
                        <div class="row">
                          <div class="large-6 columns">
                            <div class="panel">
                              <h5>This is a regular panel.</h5>
                              <p>It has an easy to override visual style, and is appropriately subdued.</p>
                            </div>
                          </div>
                          <div class="large-6 columns">
                            <div class="panel callout radius">
                              <h5>This is a callout panel.</h5>
                              <p>It's a little ostentatious, but useful for important content.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row" id="doc-pricing-tables">
                      <div class="large-12 columns">
                        <h5>Pricing Table</h5>
                        <div class="row">
                          <div class="large-6 columns large-centered">
                            <ul class="pricing-table">
                              <li class="title">Standard</li>
                              <li class="price">$99.99</li>
                              <li class="description">An awesome description</li>
                              <li class="bullet-item">1 Database</li>
                              <li class="bullet-item">5GB Storage</li>
                              <li class="bullet-item">20 Users</li>
                              <li class="cta-button"><a class="button success radius" href="#">Buy Now</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row" id="doc-progress-bars">
                      <div class="large-12 columns">
                        <h5>Progress Bars</h5>
                        <div class="progress large-6"><span class="meter" style="width: 40%"></span></div>
                        <div class="radius progress success large-8"><span class="meter" style="width: 80%"></span></div>
                        <div class="nice round progress alert large-10"><span class="meter" style="width: 30%"></span></div>
                        <div class="nice secondary progress"><span class="meter" style="width: 50%"></span></div>
                      </div>
                    </div>
                    <hr>
                    <div class="row" id="doc-tables">
                      <div class="large-12 columns">
                        <h5>Tables</h5>
                        <table>
                          <thead>
                            <tr>
                              <th width="200">Table Header</th>
                              <th>Table Header</th>
                              <th width="150">Table Header</th>
                              <th width="150">Table Header</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Content Goes Here</td>
                              <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
                              <td>Content Goes Here</td>
                              <td>Content Goes Here</td>
                            </tr>
                            <tr>
                              <td>Content Goes Here</td>
                              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
                              <td>Content Goes Here</td>
                              <td>Content Goes Here</td>
                            </tr>
                            <tr>
                              <td>Content Goes Here</td>
                              <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
                              <td>Content Goes Here</td>
                              <td>Content Goes Here</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <hr>
                    <div class="row" id="doc-thumbnails">
                      <div class="large-12 columns">
                        <h5>Thumbnails</h5>
                        <a class="th" href="http://lorempixel.com/400/200"><img src="http://lorempixel.com/400/200"></a>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                   <h4 class="text-center">Javascript</h4>
                    <hr>
                    <div class="row" id="doc-clearing">
                      <div class="large-12 columns">
                        <h5>Clearing</h5>
                        <ul class="clearing-thumbs" data-clearing>
                          <li><a class="th" href="http://lorempixel.com/800/600"><img src="http://lorempixel.com/200/100" data-caption="caption here..."></a></li>
                          <li><a class="th" href="http://lorempixel.com/800/600"><img src="http://lorempixel.com/200/100" data-caption="caption 2 here..."></a></li>
                          <li><a class="th" href="http://lorempixel.com/800/600"><img src="http://lorempixel.com/200/100" data-caption="caption 3 here..."></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" id="doc-section">
                  <div class="large-12 columns">
                    <h5>Sections</h5>
                    <hr>
                    <h6>Auto</h6>
                    <div class="section-container auto" data-section>
                      <section class="section">
                        <p class="title"><a href="#panel1">Section 1</a></p>
                        <div class="content">
                          <p>Content of section 1.</p>
                        </div>
                      </section>
                      <section class="section">
                        <p class="title"><a href="#panel2">Section 2</a></p>
                        <div class="content">
                          <p>Content of section 2.</p>
                        </div>
                      </section>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="large-12 columns">
                        <h6>Tabs</h6>
                        <div class="section-container tabs" data-section>
                          <section class="section">
                            <p class="title"><a href="#panel1">Section 1</a></p>
                            <div class="content">
                              <p>Content of section 1.</p>
                            </div>
                          </section>
                          <section class="section">
                            <p class="title"><a href="#panel2">Section 2</a></p>
                            <div class="content">
                              <p>Content of section 2.</p>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="large-12 columns">
                        <h6>Accordion</h6>
                        <div class="section-container accordion" data-section>
                          <section class="section">
                            <p class="title"><a href="#panel1">Section 1</a></p>
                            <div class="content">
                              <p>Content of section 1.</p>
                            </div>
                          </section>
                          <section class="section">
                            <p class="title"><a href="#panel2">Section 2</a></p>
                            <div class="content">
                              <p>Content of section 2.</p>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="large-12 columns">
                        <h6>Vertical Nav</h6>
                        <div class="row">
                          <div class="large-3 columns">
                            <div class="section-container vertical-nav" data-section="vertical-nav">
                              <section class="section">
                                <p class="title"><a href="#">Section 1</a></p>
                                <div class="content">
                                  <ul class="side-nav">
                                    <li><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li><a href="#">Link 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Link 1</a></li>
                                  </ul>
                                </div>
                              </section>
                              <section class="section">
                                <p class="title"><a href="#">Section 2</a></p>
                                <div class="content">
                                  <ul class="side-nav">
                                    <li><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li><a href="#">Link 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Link 1</a></li>
                                  </ul>
                                </div>
                              </section>
                            </div>
                          </div>
                          <div class="large-9 columns">
                            <p>Content to the right of the navigation.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="large-12 columns">
                        <h6>Horizontal Nav</h6>
                        <div class="section-container horizontal-nav" data-section="horizontal-nav">
                          <section class="section">
                            <p class="title"><a href="#">Section 1</a></p>
                            <div class="content">
                              <ul class="side-nav">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Link 1</a></li>
                              </ul>
                            </div>
                          </section>
                          <section class="section">
                            <p class="title"><a href="#">Section 2</a></p>
                            <div class="content">
                              <ul class="side-nav">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Link 1</a></li>
                              </ul>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row" id="doc-tooltips">
                  <div class="large-12 columns">
                    <h5>Tooltips</h5>
                    <p><span data-tooltip="" class="has-tip tip-top noradius"  title="I'm on the top and have tons and tons of content in me.">"Tip-top" (hehe)</span>, <span data-tooltip="left" class="has-tip tip-left"  title="I'm on the left!">"tip-left"</span>, or <span data-tooltip="right" class="has-tip tip-right" title="I'm on the right!">"tip-right"</span></p>
                  </div>
                </div>
              </div>
              <div class="large-3 pull-9 columns">
                <div class="docs section-container accordion" data-section="" data-options="deep_linking: false" style="">
          
                  <section class="section ">
                    <p class="title" style=""><a href="#">Navigation</a></p>
                    <div class="content" style="">
                      <ul class="side-nav">
                        <li><a class="" href="#doc-pagination">Pagination</a></li>
                        <li><a class="" href="#doc-sidenav">Side Nav</a></li>
                        <li><a class="" href="#doc-subnav">Sub Nav</a></li>
                        <li><a class="" href="#doc-topbar">Top Bar</a></li>
                        <li><a class="" href="#doc-breadcrumbs">Breadcrumbs</a></li>
                      </ul>
                    </div>
                  </section>
                  <section class="section ">
                    <p class="title" style=""><a href="#">Buttons</a></p>
                    <div class="content" style="">
                      <ul class="side-nav">
                        <li><a class="" href="#doc-almost-flat-buttons">Almost Flat Buttons</a></li>
                        <li><a class="" href="#doc-almost-flat-button-groups">Almost Flat Button Groups</a></li>
                      </ul>
                    </div>
                  </section>
                  <section class="section ">
                    <p class="title" style=""><a href="#">Forms</a></p>
                    <div class="content" style="">
                      <ul class="side-nav">
                        <li><a class="" href="#doc-forms">Forms</a></li>
                      </ul>
                    </div>
                  </section>
                  <section class="section ">
                    <p class="title" style=""><a href="#">Typography</a></p>
                    <div class="content" style="">
                      <ul class="side-nav">
                        <li><a class="" href="#doc-type">Type</a></li>
                        <li><a class="" href="#doc-labels">Labels</a></li>
                      </ul>
                    </div>
                  </section>
                  <section class="section ">
                    <p class="title" style=""><a href="#">CSS Components</a></p>
                    <div class="content" style="">
                      <ul class="side-nav">
                        <li><a class="" href="#doc-alert-boxes">Alert Boxes</a></li>
                        <li><a class="" href="#doc-panels">Panels</a></li>
                        <li><a class="" href="#doc-pricing-tables">Pricing Tables</a></li>
                        <li><a class="" href="#doc-progress-bars">Progress Bars</a></li>
                        <li><a class="" href="#doc-tables">Tables</a></li>
                        <li><a class="" href="#doc-thumbnails">Thumbnails</a></li>
                      </ul>
                    </div>
                  </section>
                  
                </div>
                <div class="row">
                  <div class="large-12 columns text-center">
                    <a href="http://github.com/websymphony/almost-flat-ui" class="button alert radius">Download</a>
                    <hr>
                    <br>
                    <div class="text-left lead">
                      Need a Stylish Resume? <br><br>
                      Try my other project: <strong><a href="https://hipcv.com" target="_blank" rel="">HipCV</a></strong>
                    </div>
                  </div>
                </div>
              </div>-->
            </div>

            <script>
                document.write('<script src=' +
                        ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
                        '.js><\/script>')
            </script>

            <script src="javascripts/foundation/foundation.js"></script>

            <script src="javascripts/foundation/foundation.alerts.js"></script>

            <script src="javascripts/foundation/foundation.clearing.js"></script>

            <script src="javascripts/foundation/foundation.cookie.js"></script>

            <script src="javascripts/foundation/foundation.dropdown.js"></script>

            <script src="javascripts/foundation/foundation.forms.js"></script>

            <script src="javascripts/foundation/foundation.joyride.js"></script>

            <script src="javascripts/foundation/foundation.magellan.js"></script>

            <script src="javascripts/foundation/foundation.orbit.js"></script>

            <script src="javascripts/foundation/foundation.placeholder.js"></script>

            <script src="javascripts/foundation/foundation.reveal.js"></script>

            <script src="javascripts/foundation/foundation.section.js"></script>

            <script src="javascripts/foundation/foundation.tooltips.js"></script>

            <script src="javascripts/foundation/foundation.topbar.js"></script>


            <script>
                $(document).foundation();
            </script>
            <script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-19093680-2']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();

            </script>
    </body>
</html>
