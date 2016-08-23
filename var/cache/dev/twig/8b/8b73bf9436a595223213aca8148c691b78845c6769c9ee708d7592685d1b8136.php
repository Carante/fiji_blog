<?php

/* ::base.html.twig */
class __TwigTemplate_4cf050a74574b5f66f40b17169540cf29b4af4dc11e7776efaa6bfbc838efbf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'searchbar' => array($this, 'block_searchbar'),
            'sidebar' => array($this, 'block_sidebar'),
            'secondNav' => array($this, 'block_secondNav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dd5b829357d2f4da96f6a196a8c25040e83da11196a5a0033e2f61951ec0aa1 = $this->env->getExtension("native_profiler");
        $__internal_3dd5b829357d2f4da96f6a196a8c25040e83da11196a5a0033e2f61951ec0aa1->enter($__internal_3dd5b829357d2f4da96f6a196a8c25040e83da11196a5a0033e2f61951ec0aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('searchbar', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('sidebar', $context, $blocks);
        // line 55
        echo "
        <div id=\"wrapper\">
            <div id=\"main-content\">
                ";
        // line 58
        $this->displayBlock('secondNav', $context, $blocks);
        // line 59
        echo "                    <div id=\"page-content-wrapper\">
                        <div class=\"container-fluid\">
                            ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "                        </div>
                    </div>
            </div>
        </div>

        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "    </body>
</html>
";
        
        $__internal_3dd5b829357d2f4da96f6a196a8c25040e83da11196a5a0033e2f61951ec0aa1->leave($__internal_3dd5b829357d2f4da96f6a196a8c25040e83da11196a5a0033e2f61951ec0aa1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca007f77582e4c228cee5ece12fe64302da5c42bfd5f8ab3a651049420fa55b1 = $this->env->getExtension("native_profiler");
        $__internal_ca007f77582e4c228cee5ece12fe64302da5c42bfd5f8ab3a651049420fa55b1->enter($__internal_ca007f77582e4c228cee5ece12fe64302da5c42bfd5f8ab3a651049420fa55b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fiji Blog!";
        
        $__internal_ca007f77582e4c228cee5ece12fe64302da5c42bfd5f8ab3a651049420fa55b1->leave($__internal_ca007f77582e4c228cee5ece12fe64302da5c42bfd5f8ab3a651049420fa55b1_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e8acdcfb5618e02ba7b52b04399029800ee352ce7714660e787744c20f9cb7f = $this->env->getExtension("native_profiler");
        $__internal_3e8acdcfb5618e02ba7b52b04399029800ee352ce7714660e787744c20f9cb7f->enter($__internal_3e8acdcfb5618e02ba7b52b04399029800ee352ce7714660e787744c20f9cb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <!-- Normanlize -->
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

            <!-- Bootstrap -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">

            <!-- FontAwesome -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

            <!-- JQuery -->
            <link rel=\"stylesheet\"
                  href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\">

            <!-- SweetAlert -->
            <link rel=\"stylesheet\" type=\"text/css\"
                  href=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css\">
        ";
        
        $__internal_3e8acdcfb5618e02ba7b52b04399029800ee352ce7714660e787744c20f9cb7f->leave($__internal_3e8acdcfb5618e02ba7b52b04399029800ee352ce7714660e787744c20f9cb7f_prof);

    }

    // line 29
    public function block_searchbar($context, array $blocks = array())
    {
        $__internal_995133cd1ffed66dd3332d36e8dd0d60b8723587e42e3f6212c6d74c0a373a07 = $this->env->getExtension("native_profiler");
        $__internal_995133cd1ffed66dd3332d36e8dd0d60b8723587e42e3f6212c6d74c0a373a07->enter($__internal_995133cd1ffed66dd3332d36e8dd0d60b8723587e42e3f6212c6d74c0a373a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "searchbar"));

        // line 30
        echo "        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        ";
        
        $__internal_995133cd1ffed66dd3332d36e8dd0d60b8723587e42e3f6212c6d74c0a373a07->leave($__internal_995133cd1ffed66dd3332d36e8dd0d60b8723587e42e3f6212c6d74c0a373a07_prof);

    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_db095ad054e27fb965496808ad6aee9a85395c1121cfbc5639c8924ee217e286 = $this->env->getExtension("native_profiler");
        $__internal_db095ad054e27fb965496808ad6aee9a85395c1121cfbc5639c8924ee217e286->enter($__internal_db095ad054e27fb965496808ad6aee9a85395c1121cfbc5639c8924ee217e286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 38
        echo "            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"menu\">
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" title=\"home\"><i class=\"fa fa-home\"></i></a><a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_front");
        echo "\"><i class=\"fa fa-key\" title=\"admin-login\"></i></a><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a>
                    </li>
                    <li>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("show_article", array("articleId" => "1"));
        echo "\"><h3>Blog Post 1</h3></a>
                    </li>
                    <li>
                        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("show_article", array("articleId" => "2"));
        echo "\"><h3>Blog Post 2</h3></a>
                    </li>
                    <li>
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("show_article", array("articleId" => "3"));
        echo "\"><h3>Blog Post 3</h3></a>
                    </li>
                </ul>
            </div>
        ";
        
        $__internal_db095ad054e27fb965496808ad6aee9a85395c1121cfbc5639c8924ee217e286->leave($__internal_db095ad054e27fb965496808ad6aee9a85395c1121cfbc5639c8924ee217e286_prof);

    }

    // line 58
    public function block_secondNav($context, array $blocks = array())
    {
        $__internal_be2db110b9c3253fa534e185fda836237ef57c9e9ba3030e630b0339fd9e991f = $this->env->getExtension("native_profiler");
        $__internal_be2db110b9c3253fa534e185fda836237ef57c9e9ba3030e630b0339fd9e991f->enter($__internal_be2db110b9c3253fa534e185fda836237ef57c9e9ba3030e630b0339fd9e991f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondNav"));

        
        $__internal_be2db110b9c3253fa534e185fda836237ef57c9e9ba3030e630b0339fd9e991f->leave($__internal_be2db110b9c3253fa534e185fda836237ef57c9e9ba3030e630b0339fd9e991f_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_d38fddfad7de40f2d40ca797c7e298d3b720b39de91d9eb30431dd19e74e55e0 = $this->env->getExtension("native_profiler");
        $__internal_d38fddfad7de40f2d40ca797c7e298d3b720b39de91d9eb30431dd19e74e55e0->enter($__internal_d38fddfad7de40f2d40ca797c7e298d3b720b39de91d9eb30431dd19e74e55e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "
                            ";
        
        $__internal_d38fddfad7de40f2d40ca797c7e298d3b720b39de91d9eb30431dd19e74e55e0->leave($__internal_d38fddfad7de40f2d40ca797c7e298d3b720b39de91d9eb30431dd19e74e55e0_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d515545537e737e19615cd7c02e9579f9a4eb1a6f7ff4cdc1b5bb8949d1f5d9 = $this->env->getExtension("native_profiler");
        $__internal_6d515545537e737e19615cd7c02e9579f9a4eb1a6f7ff4cdc1b5bb8949d1f5d9->enter($__internal_6d515545537e737e19615cd7c02e9579f9a4eb1a6f7ff4cdc1b5bb8949d1f5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "            <!-- JQuery -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>

            <!-- Latest compiled and minified JavaScript bootstrap -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js\"></script>

            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6d515545537e737e19615cd7c02e9579f9a4eb1a6f7ff4cdc1b5bb8949d1f5d9->leave($__internal_6d515545537e737e19615cd7c02e9579f9a4eb1a6f7ff4cdc1b5bb8949d1f5d9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 79,  227 => 70,  221 => 69,  213 => 62,  207 => 61,  196 => 58,  184 => 50,  178 => 47,  172 => 44,  164 => 41,  159 => 38,  153 => 37,  141 => 30,  135 => 29,  112 => 10,  108 => 9,  105 => 8,  99 => 7,  87 => 5,  78 => 81,  76 => 69,  69 => 64,  67 => 61,  63 => 59,  61 => 58,  56 => 55,  54 => 37,  51 => 36,  49 => 29,  42 => 26,  40 => 7,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}Fiji Blog!{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <!-- Normanlize -->*/
/*             <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/* */
/*             <!-- Bootstrap -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/* */
/*             <!-- FontAwesome -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/* */
/*             <!-- JQuery -->*/
/*             <link rel="stylesheet"*/
/*                   href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">*/
/* */
/*             <!-- SweetAlert -->*/
/*             <link rel="stylesheet" type="text/css"*/
/*                   href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block searchbar %}*/
/*         <div class="search-bar">*/
/*             <form method="GET" action="" class="js-sea-search sea-search">*/
/*                 <input type="search" name="q" placeholder="Search Sea Creatures" autocomplete="off" class="search-input">*/
/*             </form>*/
/*         </div>*/
/*         {% endblock %}*/
/* */
/*         {% block sidebar %}*/
/*             <div id="sidebar-wrapper">*/
/*                 <ul class="sidebar-nav">*/
/*                     <li class="menu">*/
/*                         <a href="{{ path('home') }}" title="home"><i class="fa fa-home"></i></a><a href="{{ path('admin_front') }}"><i class="fa fa-key" title="admin-login"></i></a><a href="#" class="js-header-search-toggle"><i class="fa fa-search"></i></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('show_article', {'articleId': '1'}) }}"><h3>Blog Post 1</h3></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('show_article', {'articleId': '2'}) }}"><h3>Blog Post 2</h3></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('show_article', {'articleId': '3'}) }}"><h3>Blog Post 3</h3></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         {% endblock %}*/
/* */
/*         <div id="wrapper">*/
/*             <div id="main-content">*/
/*                 {% block secondNav %}{% endblock %}*/
/*                     <div id="page-content-wrapper">*/
/*                         <div class="container-fluid">*/
/*                             {% block body %}*/
/* */
/*                             {% endblock %}*/
/*                         </div>*/
/*                     </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <!-- JQuery -->*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>*/
/* */
/*             <!-- Latest compiled and minified JavaScript bootstrap -->*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* */
/*             <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>*/
/* */
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
