<?php

/* ::_adminNav.html.twig */
class __TwigTemplate_871c69164d543ebb2d830816cd03959d227b63004e3aa6149a2aa2ce6a1ed6a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::_adminNav.html.twig", 1);
        $this->blocks = array(
            'secondNav' => array($this, 'block_secondNav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ed7647735ae7d67a9d269bfe5ec9067efd961843ec965985725811211f6cc3e = $this->env->getExtension("native_profiler");
        $__internal_1ed7647735ae7d67a9d269bfe5ec9067efd961843ec965985725811211f6cc3e->enter($__internal_1ed7647735ae7d67a9d269bfe5ec9067efd961843ec965985725811211f6cc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::_adminNav.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed7647735ae7d67a9d269bfe5ec9067efd961843ec965985725811211f6cc3e->leave($__internal_1ed7647735ae7d67a9d269bfe5ec9067efd961843ec965985725811211f6cc3e_prof);

    }

    // line 3
    public function block_secondNav($context, array $blocks = array())
    {
        $__internal_cca121bb8bd50bf5669e6f5176a11fd32be7cd93deedd2698afdf9d7eabdf41a = $this->env->getExtension("native_profiler");
        $__internal_cca121bb8bd50bf5669e6f5176a11fd32be7cd93deedd2698afdf9d7eabdf41a->enter($__internal_cca121bb8bd50bf5669e6f5176a11fd32be7cd93deedd2698afdf9d7eabdf41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secondNav"));

        // line 4
        echo "    <div class=\"navbar-static-top navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"collapsed navbar-toggle\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-8\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_front");
        echo "\" class=\"navbar-brand\"><i class=\"fa fa-long-arrow-left\"></i> Go back</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-8\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_list_posts");
        echo "\">Articles</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_list_users");
        echo "\">Users</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_proifle");
        echo "\">Profile</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_logout");
        echo "\">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_cca121bb8bd50bf5669e6f5176a11fd32be7cd93deedd2698afdf9d7eabdf41a->leave($__internal_cca121bb8bd50bf5669e6f5176a11fd32be7cd93deedd2698afdf9d7eabdf41a_prof);

    }

    public function getTemplateName()
    {
        return "::_adminNav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  67 => 20,  63 => 19,  59 => 18,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block secondNav %}*/
/*     <div class="navbar-static-top navbar-inverse">*/
/*         <div class="container-fluid">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="collapsed navbar-toggle" data-toggle="collapse"*/
/*                         data-target="#bs-example-navbar-collapse-8" aria-expanded="false">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a href="{{ path('admin_front') }}" class="navbar-brand"><i class="fa fa-long-arrow-left"></i> Go back</a>*/
/*             </div>*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="{{ path('admin_list_posts') }}">Articles</a></li>*/
/*                     <li><a href="{{ path('admin_list_users') }}">Users</a></li>*/
/*                     <li><a href="{{ path('admin_proifle') }}">Profile</a></li>*/
/*                     <li><a href="{{ path('admin_logout') }}">Logout</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
