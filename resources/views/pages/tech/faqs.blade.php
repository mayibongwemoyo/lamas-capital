@extends('techapp')
@section('content')
<main class="main-content">                      
    <div id="html-section-product-template" class="html-section">
        <header class="section-header wrapper-breadcrumb">
            <div class="wrapper">
                <h3>FAQs Page</h3>
                <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                <a href="index.html" title="Back to the frontpage">Home</a>
                <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <span>FAQs Page</span>
                </nav>
            </div>
        </header>
        <div class="wrapper">
            <div class="grid">
                <div class="panel-group" id="accordion">
                    <div class="panel">
                        <div class="panel-heading active">
                            <h4 class="panel-title"><a class="collapsed"> 1. What payment you accept? </a></h4>
                        </div>
                        <div id="velaFaq1" class="panel-collapse collapse active">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="collapsed"> 2. In what country can you deliver? </a></h4>
                        </div>
                        <div id="velaFaq2" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="collapsed"> 3. what payments you accept? </a></h4>
                        </div>
                        <div id="velaFaq3" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="collapsed"> 4. how to track my parcel? </a></h4>
                        </div>
                        <div id="velaFaq4" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="collapsed"> 5. how to handle my parcel? </a></h4>
                        </div>
                        <div id="velaFaq5" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a class="collapsed"> 6. Why amadea is the best e-commerce theme? </a></h4>
                        </div>
                        <div id="velaFaq6" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">// <![CDATA[
                $(function () {
                        $("#accordion .panel .panel-heading").click(function(){
                          $(this).toggleClass('opentab');
                        });
                      });
                // ]]></script>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection