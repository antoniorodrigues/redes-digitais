#coding:utf-8

HEAD = """

<!DOCTYPE html>
<!-- saved from url=(0062)https://demo.stiltsoft.com/display/tblfilter/Table+Filter+Demo -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <title>Pricing Cloud</title>
    
                                               
    
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE,chrome=IE7">
<meta charset="UTF-8">
<meta id="confluence-context-path" name="confluence-context-path" content="">
<meta id="confluence-base-url" name="confluence-base-url" content="https://demo.stiltsoft.com">

<meta id="atlassian-token" name="atlassian-token" content="b140d6adef3feae465690465454dff017e4e7288">

<meta id="confluence-space-key" name="confluence-space-key" content="tblfilter">
<script type="text/javascript" async="" src="./static/h_files/ga.js"></script><script type="text/javascript">
        var contextPath = '';
</script>

    

    <meta name="confluence-request-time" content="1417925914937">
        
    
        
            <meta name="ajs-is-confluence-admin" content="false">
            <meta name="ajs-connection-timeout" content="10000">
            <meta name="ajs-discovered-plugin-features" content="$discoveredList">
            <meta name="ajs-use-keyboard-shortcuts" content="true">
            <meta name="ajs-keyboardshortcut-hash" content="b8dafe665c6360cceebed7c6777d9de7">
            <style>.ia-fixed-sidebar, .ia-splitter-left {width: 170px;}.theme-default .ia-splitter #main {margin-left: 170px;}.ia-fixed-sidebar {visibility: hidden;}</style>
            

    
            
    
    
            <meta name="ajs-page-id" content="1015810">
            <meta name="ajs-content-type" content="page">
            <meta name="ajs-page-title" content="Table Filter Demo">
            <meta name="ajs-parent-page-id" content="">
            <meta name="ajs-space-key" content="tblfilter">
            <meta name="ajs-space-name" content="Confluence Table Filter">
            <meta name="ajs-jira-metadata-count" content="-1">
            <meta name="ajs-from-page-title" content="">
            <meta name="ajs-can-remove-page" content="false">
            <meta name="ajs-browse-page-tree-mode" content="view">
            <meta name="ajs-user-display-name" content="Anonymous">
            <meta name="ajs-editor.loader.comment.resources" content="&lt;link type=&quot;text/css&quot; rel=&quot;stylesheet&quot; href=&quot;/s/d41d8cd98f00b204e9800998ecf8427e/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/9ae394be050e686cf09a812d1cec2dd8/_/download/contextbatch/css/comment-editor/batch.css&quot; media=&quot;all&quot;&gt;
">
            <meta name="ajs-context-path" content="">
            <meta name="ajs-base-url" content="https://demo.stiltsoft.com">
            <meta name="ajs-version-number" content="5.5.1">
            <meta name="ajs-build-number" content="5509">
            <meta name="ajs-remote-user" content="">
            <meta name="ajs-current-user-fullname" content="">
            <meta name="ajs-current-user-avatar-url" content="">
            <meta name="ajs-static-resource-url-prefix" content="/s/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/_">
            <meta name="ajs-global-settings-attachment-max-size" content="10485760">
            <meta name="ajs-user-locale" content="en_GB">
            <meta name="ajs-enabled-dark-features" content="">
            <meta name="ajs-atl-token" content="b140d6adef3feae465690465454dff017e4e7288">
            <meta name="ajs-confluence-flavour" content="VANILLA">
            <meta name="ajs-user-date-pattern" content="dd MMM yyyy">
            <meta name="ajs-editor.loader.resources" content="&lt;link type=&quot;text/css&quot; rel=&quot;stylesheet&quot; href=&quot;/s/aa9e0bf3bc7c90d1e92e617cc08c045a/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/f6dd0cfccbceea1392993cd36b893ed1/_/download/contextbatch/css/editor,macro-browser,fullpage-editor,-viewcontent,-atl.general/batch.css&quot; media=&quot;all&quot;&gt;
&lt;link type=&quot;text/css&quot; rel=&quot;stylesheet&quot; href=&quot;/s/aa9e0bf3bc7c90d1e92e617cc08c045a/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/f6dd0cfccbceea1392993cd36b893ed1/_/download/contextbatch/css/editor,macro-browser,fullpage-editor,-viewcontent,-atl.general/batch.css?media=%28max-width%3A+1450px%29&quot; media=&quot;(max-width: 1450px)&quot;&gt;
&lt;!--[if lt IE 9]&gt;
&lt;link type=&quot;text/css&quot; rel=&quot;stylesheet&quot; href=&quot;/s/aa9e0bf3bc7c90d1e92e617cc08c045a/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/f6dd0cfccbceea1392993cd36b893ed1/_/download/contextbatch/css/editor,macro-browser,fullpage-editor,-viewcontent,-atl.general/batch.css?conditionalComment=lt+IE+9&quot; media=&quot;all&quot;&gt;
&lt;![endif]--&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;/s/aa9e0bf3bc7c90d1e92e617cc08c045a/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/f6dd0cfccbceea1392993cd36b893ed1/_/download/contextbatch/js/editor,macro-browser,fullpage-editor,-viewcontent,-atl.general/batch.js&quot; &gt;&lt;/script&gt;
">
            <meta name="ajs-date.format" content="MMM dd, yyyy">
    
    <link rel="shortcut icon" href="https://demo.stiltsoft.com/s/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/_/favicon.ico">
    <link rel="icon" type="image/x-icon" href="https://demo.stiltsoft.com/s/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/_/favicon.ico">

<link rel="search" type="application/opensearchdescription+xml" href="https://demo.stiltsoft.com/opensearch/osd.action" title="StiltSoft Demo Confluence">
    
                    
            <meta name="ajs-create-issue-metadata-show-discovery" content="false">
            

<link type="text/css" rel="stylesheet" href="./static/h_files/batch.css" media="all">
<link type="text/css" rel="stylesheet" href="./static/h_files/batch(1).css" media="print">

<link type="text/css" rel="stylesheet" href="./static/h_files/batch(3).css" media="all">
<link type="text/css" rel="stylesheet" href="./static/h_files/batch(4).css" media="all">

<link type="text/css" rel="stylesheet" href="./static/h_files/com.stiltsoft.confluence.talk.confluence-talk-plugin-talk-resources.css" media="all">

<link type="text/css" rel="stylesheet" href="./static/h_files/com.stiltsoft.confluence.talk.confluence-talk-plugin-talk-resources(1).css" media="print">
<link type="text/css" rel="stylesheet"      href="./static/h_files/com.stiltsoft.confluence.plugin.tablefilter.tablefilter-web-resources.css"
                       media="all">
<link type="text/css" rel="stylesheet" href="./static/h_files/com.atlassian.confluence.plugins.confluence-space-ia-spacesidebar.css" media="all">

<link type="text/css" rel="stylesheet" href="./static/h_files/com.atlassian.confluence.plugins.confluence-highlight-actions-highlighting-experiment-resources.css" media="all">
<link type="text/css" rel="stylesheet" href="./static/h_files/confluence.extra.jira-web-resources-adg.css" media="all">
<script type="text/javascript" src="./static/h_files/batch.js"></script><style type="text/css"></style>

<script type="text/javascript" src="./static/h_files/batch(5).js"></script>
<script type="text/javascript" src="./static/h_files/batch(6).js"></script>
<script type="text/javascript" src="./static/h_files/batch(7).js"></script>
<script type="text/javascript" src="./static/h_files/com.stiltsoft.confluence.talk.confluence-talk-plugin-talk-resources.js"></script>
<script type="text/javascript" src="./static/h_files/com.stiltsoft.confluence.plugin.tablefilter.tablefilter-web-resources.js"></script>
<script type="text/javascript" src="./static/h_files/com.atlassian.confluence.plugins.confluence-space-ia-soy-resources.js"></script>
<script type="text/javascript" src="./static/h_files/com.atlassian.confluence.plugins.confluence-space-ia-spacesidebar.js"></script>
<script type="text/javascript" src="./static/h_files/com.atlassian.confluence.plugins.confluence-highlight-actions-highlighting-experiment-resources.js"></script>
<script type="text/javascript" src="./static/h_files/com.atlassian.mywork.mywork-confluence-host-plugin-mw-header-anchor.js"></script>
<link type="text/css" rel="stylesheet" href="./static/h_files/colors.css" media="all">
<link type="text/css" rel="stylesheet" href="./static/h_files/default-theme.css" media="all">


        
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18056811-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    
                <link rel="canonical" href="./static/h_files/h.html">
        <link rel="shortlink" href="https://demo.stiltsoft.com/x/AoAP">
    <meta name="wikilink" content="[tblfilter:Table Filter Demo]">
    <meta name="page-version" content="26">

<link type="text/css" rel="stylesheet" href="./static/h_files/batch(8).css" media="all"><link type="text/css" rel="stylesheet" href="./static/h_files/batch(9).css" media="(max-width: 1450px)"><!--[if lt IE 9]>
<link type="text/css" rel="stylesheet" href="/s/aa9e0bf3bc7c90d1e92e617cc08c045a/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/f6dd0cfccbceea1392993cd36b893ed1/_/download/contextbatch/css/editor,macro-browser,fullpage-editor,-viewcontent,-atl.general/batch.css?conditionalComment=lt+IE+9" media="all">
<![endif]-->
            <meta name="ajs-content-type" content="page">
            <meta name="ajs-min-editor-height" content="150">
            <meta name="ajs-editor-plugin-resource-prefix" content="/s/en_GB/5509/df269dcb09b33d7c337c07d822c97aeb564430a7.4/5.5.1/_">
            <meta name="ajs-num-attachments" content="0">
            <meta name="ajs-auto-start" content="false">
            <meta name="ajs-cancel-button-close-text" content="Close">
            <meta name="ajs-content-id" content="1015810">
            <meta name="ajs-action-locale" content="en_GB">
            <meta name="ajs-save-drafts" content="true">
            <meta name="ajs-use-inline-tasks" content="true">
            <meta name="ajs-heartbeat" content="true">
            <meta name="ajs-cancel-button-discard-text" content="">
            <meta name="ajs-draft-id" content="0">
            <meta name="ajs-new-page" content="false">
            <meta name="ajs-form-name" content="inlinecommentform">
            <meta name="ajs-attachment-source-content-id" content="1015810">
            <meta name="ajs-editor-mode" content="richtext">
            <meta name="ajs-draft-type" content="page">
            <meta name="ajs-existing-draft-id" content="0">
            <meta name="ajs-can-attach-files" content="true">
                
            		    <meta name="ajs-max-thumb-width" content="300">
		    <meta name="ajs-can-send-email" content="false">
		    <meta name="ajs-is-dev-mode" content="false">
		    <meta name="ajs-draft-save-interval" content="30000">
		    <meta name="ajs-show-hidden-user-macros" content="false">
		    <meta name="ajs-is-admin" content="false">
		    <meta name="ajs-heartbeat-interval" content="30000">
	
    </head>

<body onload="placeFocus()" id="com-atlassian-confluence" class="theme-default  aui-layout aui-theme-default" data-aui-version="5.4.4-CONFDEV-21873">

        
    <ul id="assistive-skip-links" class="assistive">
</ul>
<div id="page">
<div id="full-height-container">
    <div id="header-precursor">
        <div class="cell">
            <!-- Message Banner -->

                            </div>
    </div>
    



<header id="header" role="banner">
    <nav class="aui-header aui-dropdown2-trigger-group" role="navigation" data-aui-responsive="true"><div class="aui-header-inner"><div class="aui-header-primary"><h1 id="logo" class="aui-header-logo aui-header-logo-custom"><a href="https://home.example.com/"><img src="./static/h_files/confluence-logo.png" alt="StiltSoft Demo Confluence" data-aui-responsive-header-index="0"></a></h1><ul class="aui-nav" style="width: auto;">
                            <li>
            
        
        <!--
<a id="space-menu-link" class="aui-nav-link aui-dropdown2-trigger" href="http://example.com" aria-haspopup="true" aria-owns="space-menu-link-content" title="Spaces"><span class="browse">Spaces</span><span class="aui-icon-dropdown"></span></a><div id="space-menu-link-content" class="aui-dropdown2 aui-style-default aui-dropdown2-in-header" aria-hidden="false"></div>
        --></li>
                    <li>
            
    
        
<a id="people-directory-link" href="./static/pricing_cloud_search2.html" class=" aui-nav-imagelink" title="Precos">
            <span>Tabela de Preços</span>
    </a>
        </li>
                                            <li style="display: none;"><a id="aui-responsive-header-dropdown-trigger-0" class="aui-dropdown2-trigger" aria-owns="aui-responsive-header-dropdown-content-0" aria-haspopup="true" href="http://example.com">More<span class="icon aui-icon-dropdown"></span></a><div id="aui-responsive-header-dropdown-content-0" class="aui-dropdown2 aui-style-default"><div class="aui-dropdown2-section"><ul id="aui-responsive-header-dropdown-list-0"></ul></div></div></li><li>
            
    
            <!--
<a id="create-page-button" href="https://demo.stiltsoft.com/pages/createpage.action?spaceKey=tblfilter&fromPageId=1015810" class="aui-button aui-style aui-button-primary aui-nav-imagelink" title="Create Content (c)">
            <span>Create</span> -->
    </a>
        </li>
        </ul>
</div><div class="aui-header-secondary"><ul class="aui-nav">
                        <li>
        <form id="quick-search" class="aui-quicksearch dont-default-focus header-quicksearch" action="http://www.google.com/search?q="><fieldset>
			<input id="quick-search-query" class="text app-search search quick-search-query" type="text" accesskey="q" autocomplete="off" name="q" title="Digite a busca" placeholder="Search">
			<input id="quick-search-submit" class="quick-search-submit" type="submit" value="Search">
			<div class="aui-dd-parent quick-nav-drop-down">
			</div></fieldset></form>
    </li>
        <li>
            <!--
        <a id="help-menu-link" class="aui-nav-link aui-dropdown2-trigger" href="http://example.com" aria-haspopup="true" aria-owns="help-menu-link-content" title="Help">
        <span class="aui-icon aui-icon-small aui-iconfont-help">Help</span>
    </a>-->
    <nav id="help-menu-link-content" class="aui-dropdown2 aui-style-default" aria-hidden="true">
                    <div class="aui-dropdown2-section">
                                    <strong></strong>
                                <ul id="help-menu-link-leading" class="aui-list-truncate section-leading first">
                                            <li>
        
            
<a id="confluence-help-link" href="https://docs.atlassian.com/confluence/docs-55/Getting+Help+And+Support" class="interactive" title="Visit the Confluence documentation home" target="_blank">
        Online Help
</a>
</li>
                                            <li>
    
                
<a id="keyboard-shortcuts-link" href="http://example.com" class="interactive" title="View available keyboard shortcuts (?)">
        Keyboard Shortcuts
</a>
</li>
                                            <li>
    
            
<a id="feed-builder-link" href="https://demo.stiltsoft.com/dashboard/configurerssfeed.action" class="interactive" title="Create your custom RSS feed.">
        Feed Builder
</a>
</li>
                                            <li>
    
            
<a id="whats-new-menu-link" href="https://docs.atlassian.com/confluence/docs-55/whatsnew/iframe" class="interactive" title="">
        What’s new
</a>
</li>
                                            <li>
    
                
<a id="gadget-directory-link" href="http://example.com" class="user-item administration-link  interactive" title="Browse gadgets provided by Confluence">
        Available Gadgets
</a>
</li>
                                            <li>
    
            
<a id="confluence-about-link" href="https://demo.stiltsoft.com/aboutconfluencepage.action" class="interactive" title="Get more information about Confluence">
        About Confluence
</a>
</li>
                                    </ul>
            </div>
            </nav>
    
    </li>
        <li>
                
    
    </li>
        <li>
            
    </li>
        <li>
                                            </li><li>
        
            
<a id="login-link" href="info.html" class="   user-item login-link " title="">
        Info
</a>
</li>
                        
    
    </ul>
</div></div><!-- .aui-header-inner--></nav><!-- .aui-header -->
    <br class="clear">
</header>

    
    	<div class="ia-splitter">
    		<div class="ia-splitter-left">
    			<div class="ia-fixed-sidebar" style="width: 170px; visibility: visible; top: 0px; left: 0px;">
    				
    
    			<div class="ia-splitter-handle tipsy-enabled" data-tooltip="Collapse sidebar ( [ )" title=" ([)"><div class="ia-splitter-handle-highlight"></div></div></div>
    		</div>
        <!-- \#header -->

        
        <div id="main" class=" aui-page-panel" style="margin-left: 170px;">
                <div id="main-header">
            
    <div id="navigation" class="content-navigation view">
                    <ul class="ajs-menu-bar">
                            <li class="ajs-button normal">

    
        

</li>
                        
        <li class="normal ajs-menu-item">
        <a id="add-menu-link" class="add hidden ajs-menu-title aui-dropdown2-trigger" href="http://example.com" aria-haspopup="true" aria-owns="add-menu" data-container="#navigation"><span><span>Add</span></span></a>         <div id="add-menu" class="aui-dropdown2 aui-style-default">
                            <ul id="add-menu-space" class="section-space first aui-dropdown2-section">
                                            <li>

    
        
                            
    
    
    <a id="createPageLink" href="https://demo.stiltsoft.com/pages/createpage.action?spaceKey=tblfilter&fromPageId=1015810" rel="nofollow" class="add-page" accesskey="p" title="Add a Page">
                <span>Page</span>    </a>
</li>
                                        <li>

    
        
                            
    
    
    <a id="createPageLinkTemplate" href="https://demo.stiltsoft.com/pages/createpage-choosetemplate.action?spaceKey=tblfilter&newSpaceKey=tblfilter&fromPageId=1015810" rel="nofollow" class="add-page-template" accesskey="p" title="Add a Page using a template">
                <span>Page from template</span>    </a>
</li>
                                </ul>
                            <ul id="add-menu-page" class="section-page aui-dropdown2-section">
                                            <li>

    
        
                            
    
    
    <a id="add-comment-menu-link" href="https://demo.stiltsoft.com/display/tblfilter/Table+Filter+Demo?showComments=true&showCommentArea=true#addcomment" rel="nofollow" class="add-comment" title="Add a Comment">
                <span>Comment</span>    </a>
</li>
                                        <li>

    
        
                            
    
    
    <a id="add-attachment-link" href="https://demo.stiltsoft.com/pages/viewpageattachments.action?pageId=1015810" rel="nofollow" class="add-attachment" accesskey="t" title="Add an Attachment">
                <span>Attachment</span>    </a>
</li>
                                </ul>
                    </div>
    </li>
                    
        <li class="normal ajs-menu-item">
        <a id="action-menu-link" class="action ajs-menu-title aui-dropdown2-trigger" href="http://example.com" aria-haspopup="true" aria-owns="action-menu" data-container="#navigation"><span><span></span><!-- Tools--></span></a>         <div id="action-menu" class="aui-dropdown2 aui-style-default most-right-menu-item">
                            <ul id="action-menu-primary" class="section-primary first aui-dropdown2-section">
 
    
    <a id="example" href="example.html"  title="">
                <span>Opcoes Menu..</span>    </a>
</li>
                                </ul>
                    </div>
    </li>
            </ul>
    </div>

            
            <div id="title-heading" class="pagetitle with-breadcrumbs">
                
                                    <div id="breadcrumb-section">
                        
    
    
    <ol id="breadcrumbs">
                    
                
        <li class="first">
                
<!--
                    <span class=""><a href="https://demo.stiltsoft.com/collector/pages.action?key=tblfilter&src=breadcrumbs-collector">Pages</a></span>
    -->            </li></ol>


                    </div>
                
                
        <a href="http://example.compage-banner-end" class="assistive">Skip to end of banner</a>
<div id="page-banner-start" class="assistive"></div>

                    
            <div id="page-metadata-banner" style="visibility: visible;"><ul class="banner"><li id="system-content-items" class="noprint hidden"><a href="" title="Restrictions apply" id="content-metadata-page-restrictions" class="hidden"><img class="page-banner-item-icon" src="./static/h_files/red_padlock.png" style="height: 16px; width: 16px;"></a></li><li class="page-metadata-item noprint has-button" id="content-metadata-jira-wrapper"><a href="" title="" id="content-metadata-jira" class="aui-button aui-button-subtle content-metadata-jira tipsy-disabled hidden"><img class="page-banner-item-icon" src="./static/h_files/icon-jira-link.png" style="height: 16px; width: 16px;"><span>JIRA links</span></a></li></ul></div>
            

<a href="http://example.compage-banner-start" class="assistive">Go to start of banner</a>
<div id="page-banner-end" class="assistive"></div>
    

                <h1 id="title-text" class="with-breadcrumbs">
                                                <a href="./static/pricing_cloud_search2.html">Cloud Pricing Search</a>
                                    </h1>
            </div>
        </div><!-- \#main-header -->
        
        

        <div id="sidebar-container">
                                                </div><!-- \#sidebar-container -->

        
    
     


<div id="content" class="page view">
    

<div id="action-messages">
                        </div>



        <script type="text/x-template" title="searchResultsGrid">
    <table class="aui">
        <thead>
            <tr class="header">
                <th class="search-result-title">Page Title</th>
                <th class="search-result-space">Space</th>
                <th class="search-result-date">Updated</th>
            </tr>
        </thead>
    </table>
</script>
<script type="text/x-template" title="searchResultsGridCount">
    <p class="search-result-count">{0}</p>
</script>
<script type="text/x-template" title="searchResultsGridRow">
    <tr class="search-result">
        <td class="search-result-title"><a href="{1}" class="content-type-{2}"><span>{0}</span></a></td>

</script>
        
    
            

        
                            
    

                    
<div class="columnLayout single" data-layout="single">
<div class="cell normal" data-type="normal">
		
		<!-- ccccc -->
		
			

		
		
	</tbody></table></form></div>
    </div>

  

</div>


</html>
<div class="innerCell">

<div class="tablefilter-outer-wrapper">
    
    <div id="comboBoxDiv-TABLE_ID629376224_90549309" class="tableFilterCbStyle">
	
			     
        <form class="aui">
			
			 <fieldset id="inputs_adicionais" style="border: none">  
        </fieldset>  

                 </br>&nbsp;&nbsp;Sua aplicação possui alguma restrição quanto à localidade geográfica onde os dados  serão armazenados?</p></p>		
<p>
<label id="region1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="region" value="0">Sim (Os dados precisam necessariamente está em território brasileiro)</input></label><br>
<label id="region2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="region" value="1" checked="checked">Não (Os dados podem estar armazendados em território local ou internacional)</input></label>
			     
                 <p></br></br></br></br>&nbsp;&nbsp;Quantas horas por dia sua aplicação deverá funcionar?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></p>	
                               <div>
                                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempo:</label>
                                          <select id="selhour" class="select" name="100" style="width: 150px;">
                        ;
                                            <option value="0"
                                                                    selected="selected"
                                                                    
                                                                   
                                >6 h
                            </option>
                                           
                                                                                <option value="1"
                                >12 h
                            </option>
                                                                                <option value="2"
                                >24 h
                            </option>
                            
                                                                        </select>
                </div>
                          
                 <p></br></br></br></br>&nbsp;&nbsp;Em que ambiente sua aplicação irá funcionar?</p></p>	
                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valores técnicos definidos de acordo com a solução recomendada </br> 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Só altere esses valores caso seja realmente necessário).</label></br></br> </p></p></p></p>
                            <div class="filter-container">
			
                                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistema Operacional:</label>
                                        <select id="so_sel" class="select" name="2" style="width: 150px;" multiple>
                        ;
                                                    <option value="Linux" 
                                                                   
                                >Linux
                            </option>
                                                                                <option value="Windows"
                                >Windows 
                            </option>
                                        
                                                                        </select>
                </div>
                          
                        <p></br></br></p></p>	</p></p>	
                         
                              
                              
                               <div class="filter-container">
                                         <br />   <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memoria (GB):</label>
                                        <select  id="mem_sel" class="select" name="7" style="width: 150px;" multiple>
                        ;
                                <option value="1">1</option> 
                             
 <option value="2"  >2</option>
 <option value="4">4</option>
 <option value="8">8</option>
 <option value="15">15</option>
 <option value="20">20</option>
 <option value="30">30</option>
 <option value="60">60</option>
 <option value="90">90</option>
 <option value="120">120</option>

                                                                        </select>
                </div>
                                      
                          
                        <p></br></br></br></p></p>	
                                                    
                              
                              
                               <div class="filter-container">
                                         <br />   <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nucleos (vCPUs):</label>
                                        <select class="select" name="4" style="width: 150px;" multiple>
                        ;
                                                    <option value="0"  
                                >1
                            </option>
                                                                                <option value="1" 
                                >2
                            </option>
                                                                                <option value="2"
                                >4
                            </option>                                                  <option value="3"
                                >8
                            </option>                                                  <option value="4"
                                >16
                            </option>                                                  <option value="5"
                                >32
                            </option>
                                                                        </select>
                </div>
                              
                              <p></br></br></br></p></p>	
                                                    
                              
                              
                               <div class="filter-container">
                                         <br />   <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo de Armazenamento:</label>
                                        <select id="seltypestorage" class="select" name="102" style="width: 150px;">
                        ;
                                                    <option value="0"   selected="selected"
                                >Standard
                            </option>
                                                                                <option value="1"
                                >SSD
                            </option>
                                                                        </select>
                </div>
                              
                          
                        <p></br></br></br></p></p>	
                              
                               <div class="filter-container">
                                         <br />   <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Armazenamento em Disco (GB):</label>
                                      <select id="selstorage" class="select" name="101" style="width: 150px;">
                        ;
                            <option value="0"  >0      </option> 
                            <option value="10"  >10    </option> 
                            <option value="20"  >20   </option>  
                             <option value="40"  >40 </option>  
                             <option value="50" >50  </option> 
                             <option value="100" >100   </option>  
                              <option value="200" >200   </option>  
                             <option value="500" >500    </option>	
                              <option value="1000" >1000      </option>
                                                                        </select>
                </div>
                              
                                <p></br></p>	
                             
                                      <!--              <div class="filter-container filter-reset" title="Reset all filters">
                </div> -->
                      <div style="display: none;">
                                        
                                          <select id="selreg" class="select" name="13" style="width: 150px;" multiple>
                        ;
                                            <option value="0"
                                                                    selected="selected"
                                                                    
                                                                   
                                >US
                            </option>
                                           
                                                                                <option value="1"
                                >BR-1
                            </option>                      <option value="2"
                                >BR-2
                            </option>         
                                                               
                            
                                                                        </select>
                </div>
                    </form>
            </div>  <p></br></br></p></p>	
<div class="tableFilterCbStyle">
	
														<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														Planos Recomendados:<img id="loadingImage" src="./static/h_files/loading1.gif" style="visibility:hidden;"/>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

     </div>  
       
                       
    <div id="TABLE_ID629376224_90549309" class="tablefilter-table-wrapper">
        <div class="table-wrap">
			<form name="myform" id="myform">
			<table id="maintab" class="confluenceTable tablesorter"><thead><tr class="sortableHeader">
			<th talk-marker="83" class="confluenceTh sortableHeader" data-column="0"><div class="tablesorter-header-inner"><p talk-marker="84">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provedor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div></th>
			<th talk-marker="85" class="confluenceTh sortableHeader" data-column="1"><div class="tablesorter-header-inner"><p talk-marker="86">Tipo de Instancia</p></div></th>
			<th talk-marker="87" class="confluenceTh sortableHeader" data-column="2"><div class="tablesorter-header-inner"><p talk-marker="88">Sistema Operacional</p></div></th>
			<th talk-marker="89" class="confluenceTh sortableHeader" data-column="3"><div class="tablesorter-header-inner"><p talk-marker="90">Memoria</p></div></th>
			<th talk-marker="91" class="confluenceTh sortableHeader" data-column="4"><div class="tablesorter-header-inner"><p talk-marker="92">Nucelos (vCPUs)</p></div></th>
			<th talk-marker="83" class="confluenceTh sortableHeader" data-column="5"><div class="tablesorter-header-inner"><p talk-marker="94">Espaçamento em Disco</p></div></th>
			<th talk-marker="95" class="confluenceTh sortableHeader tablesorter-headerSoDown" data-column="6"><div class="tablesorter-header-inner"><p talk-marker="96">Estimativa de Preço Mensal por instancia (R$)</p></div></th>
			<th style="display:none;" data-column="7" class="sortableHeader"><div class="tablesorter-header-inner">Memoria</div></th>
			<th talk-marker="97" style="display:none;" class="confluenceTh sortableHeader" data-column="8"><div class="tablesorter-header-inner"><p talk-marker="98">Estimativa de Preço Mensal por instancia (R$)</p></div></th>
			<th talk-marker="99" style="display:none;" class="confluenceTh sortableHeader" data-column="9"><div class="tablesorter-header-inner"><p talk-marker="100">Estimativa de Preço Mensal por instancia (R$)</p></div></th>
			
			<th talk-marker="101" class="confluenceTh sortableHeader" data-column="10"><div class="tablesorter-header-inner"><p talk-marker="102">Taxa Armazenamento Standard (GB/mês - R$)</p></div></th>	
			<th talk-marker="103"  style="display:none;" class="confluenceTh sortableHeader" data-column="11"><div class="tablesorter-header-inner"><p talk-marker="104">Taxa Armazenamento SSD (GB/mês - R$)</p></div></th>		
			<th talk-marker="105" class="confluenceTh sortableHeader" data-column="12"><div class="tablesorter-header-inner"><p talk-marker="106">Estimativa de Preço Total por Mês (R$)</p></div></th>	
			<th talk-marker="107" style="display:none;" class="confluenceTh sortableHeader" data-column="13"><div class="tablesorter-header-inner"><p talk-marker="108">Regiao</p></div></th>		
			<th talk-marker="109" class="confluenceTh sortableHeader" data-column="14"><div class="tablesorter-header-inner"><p talk-marker="110">Template</p></div></th>		
			
			</tr>
		</thead><tbody class>"""








FOOTER = """
				<!-- ccccc -->
		
			
		
		
	</tbody></table></form></div>
    </div>

    <script type="text/javascript">
        (function ($) {
		var GetURLParameter = function(sParam) {
				var sPageURL = window.location.search.substring(1);
				var sURLVariables = sPageURL.split('&');
				for (var i = 0; i < sURLVariables.length; i++) 
				{
					var sParameterName = sURLVariables[i].split('=');
					if (sParameterName[0] == sParam) 
					{
						return sParameterName[1];
					}
				}
			}
			
				var so = GetURLParameter('so');
				var mem = GetURLParameter('mem');
				var storage = GetURLParameter('storage');
				var final_soft = GetURLParameter('soft');
				//window.alert(so+mem+storage);
				$('#so_sel').val(so);
				$('#mem_sel').val(mem);
				$('#selstorage').val(storage);
				
				var sof_div = ' <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>\
				    <div id="7"><p></br> \<table> \
					<th talk-marker="83" class="confluenceTh sortableHeader"> Solução em TI Recomendada</th> \
					<tr class=alternate2>\
					<td talk-marker="91" class="confluenceTd"><p talk-marker="92"><a href="_linksoft_" > \
					<img src="./static/_soft_.jpg" /></a></p></td>  </tr></table> </div>'
				sof_div = sof_div.replace("_soft_", final_soft);
				if (final_soft == "e-cidade"){
					sof_div = sof_div.replace("_linksoft_", "http://www.softwarepublico.gov.br/ver-comunidade?community_id=15315976");
				}else{
					sof_div = sof_div.replace("_linksoft_", "http://www.urbem.cnm.org.br");					
				}
					
				$('#inputs_adicionais').append(sof_div); 	
				
				//var country = document.getElementById("so_sel");
				//country.options[0].selected = true;
			
            var timer_TABLE_ID629376224_90549309 = null;
				var r1 = document.getElementById('region1');
				var r2 = document.getElementById('region2');
				
				//window.alert(r1);
				//window.alert(r2);
				r1.onclick =  function() {filterTable();}
				r2.onclick =  function() {filterTable();}


            $(document).ready(function () {
                $("#comboBoxDiv-TABLE_ID629376224_90549309 select").chosen({
                    no_results_text: 'No matches for',
                    placeholder_text_multiple: 'Start typing...'
                }).change(function(e, data) {
					
				
					
                    if (data.selected) {
                        $(this).find('option[value="' + data.selected + '"]').attr('selected', 'selected');
                    } else if (data.deselected) {
                        $(this).find('option[value="' + data.deselected + '"]').removeAttr('selected');
                    }
                    filterTable();
                });

                $("#comboBoxDiv-TABLE_ID629376224_90549309 input.user-filter").keyup(function () {
                    if (timer_TABLE_ID629376224_90549309) {
                        window.clearTimeout(timer_TABLE_ID629376224_90549309);
                    }
                    timer_TABLE_ID629376224_90549309 = window.setTimeout(function () {
                        timer_TABLE_ID629376224_90549309 = null;
                        filterTable();
                    }, 330);
                });

                $('#comboBoxDiv-TABLE_ID629376224_90549309 .filter-reset').click(function() {
                    $("#comboBoxDiv-TABLE_ID629376224_90549309 input.user-filter").val('');
                    var select = $("#comboBoxDiv-TABLE_ID629376224_90549309 select");
                    select.find("option:selected").removeAttr('selected');
                    select.trigger('chosen:updated');
                    filterTable();
                });

                                    filterTable();
                
                var isVisibleTABLE_ID629376224_90549309 = false;

                            });
		



            var filterTable = function() {
				//$('#sel').val(val);
				//$('#sel').val(val);
				
				document.getElementById('loadingImage').style.visibility='visible';
		
				setTimeout(function() {
					// long code here
                window.TableFilter.filterId = "TABLE_ID629376224_90549309";
                
                				
				
						//Sort by price #81F79F
						
					//$("#maintab").tablesorter( {sortList: [[6,0]]} ); 
							
					try{
					
				var region = $('input[name="region"]:checked').val();
         
				if (region == 0){
					$('#selreg').val([1,2]);
				}else{
					$('#selreg').val([0,2]);
				}
					
					
					
									
						var yourSelect = document.getElementById( "selhour" );
						var my_option  = yourSelect.options[ yourSelect.selectedIndex ].value;
						var hour = 6;
						
						var yourSelect2 = document.getElementById( "seltypestorage" );
						var my_option2  = yourSelect2.options[ yourSelect2.selectedIndex ].value;
						var type_storage = 10;
						
						var yourSelect3 = document.getElementById( "selstorage" );
						var my_option3  = yourSelect3.options[ yourSelect3.selectedIndex ].value;
					
						
						if (my_option == 0){
							$('#maintab tr').find('td:eq(6),th:eq(6)').show();
							$('#maintab tr').find('td:eq(8),th:eq(8)').hide();
							$('#maintab tr').find('td:eq(9),th:eq(9)').hide();
							hour = 6;
						//$("#maintab").tablesorter( {sortList: [[6,0]]} ); 
						}else if (my_option == 1){
							$('#maintab tr').find('td:eq(6),th:eq(6)').hide();
							$('#maintab tr').find('td:eq(8),th:eq(8)').show();
							$('#maintab tr').find('td:eq(9),th:eq(9)').hide();
							hour = 8;
						//$("#maintab").tablesorter( {sortList: [[8,0]]} ); 
						}else {
							$('#maintab tr').find('td:eq(6),th:eq(6)').hide();
							$('#maintab tr').find('td:eq(8),th:eq(8)').hide();
							$('#maintab tr').find('td:eq(9),th:eq(9)').show();
							hour = 9;
						//$("#maintab").tablesorter( {sortList: [[9,0]]} ); 
						}
					
						var gb_storage = 0;
						if (my_option3 == 0){
							gb_storage = 0;
						}else if (my_option3 == 10){
							gb_storage = 10;
						}else if (my_option3 == 20){
							gb_storage = 20;
						}else if (my_option3 == 40){
							gb_storage = 40;
						}else if (my_option3 == 50){
							gb_storage = 50;
						}else if (my_option3 == 100){
							gb_storage = 100;
						}else if (my_option3 == 200){
							gb_storage = 200;
						}else if (my_option3 == 500){
							gb_storage = 500;
						}else if (my_option3 == 1000){
							gb_storage = 1000;
						}
						
						if (my_option2 == 0){
							$('#maintab tr').find('td:eq(10),th:eq(10)').show();
							$('#maintab tr').find('td:eq(11),th:eq(11)').hide();
							type_storage = 10;
						}else if (my_option2 == 1){
							$('#maintab tr').find('td:eq(11),th:eq(11)').show();
							$('#maintab tr').find('td:eq(10),th:eq(10)').hide();
							type_storage = 11;
						}
			
					window.TableFilter.filterTable(gb_storage, type_storage, hour);
		
                $("#maintab").tablesorter( {sortList: [[12,0]]} ); 
					document.getElementById('loadingImage').style.visibility='hidden';
				} catch(err){
				
					window.alert('error:'+ err.message);
					window.TableFilter.filterTable(0, 10, 6);
                $("#maintab").tablesorter( {sortList: [[12,0]]} ); 
					document.getElementById('loadingImage').style.visibility='hidden';
				}
					
											
			
			
				},1); // give it a moment to redraw
				
				
				
            }
        })(AJS.$)
    </script>

</div>


</html>
"""
