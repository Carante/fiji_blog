<?php

/* admin/front.html.twig */
class __TwigTemplate_147f296ecdb4427d4ed1646c684939e9a0ee512ab59227957a6dac3134083afa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "admin/front.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d004050ae5d9f8faceddf1a78eb7b2b01a897fdea4c17498a971ca79925f0be = $this->env->getExtension("native_profiler");
        $__internal_8d004050ae5d9f8faceddf1a78eb7b2b01a897fdea4c17498a971ca79925f0be->enter($__internal_8d004050ae5d9f8faceddf1a78eb7b2b01a897fdea4c17498a971ca79925f0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/front.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d004050ae5d9f8faceddf1a78eb7b2b01a897fdea4c17498a971ca79925f0be->leave($__internal_8d004050ae5d9f8faceddf1a78eb7b2b01a897fdea4c17498a971ca79925f0be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_41eee49b6a2ba5c452aa2524af20ebe549b7807be366241957942494a71e2e64 = $this->env->getExtension("native_profiler");
        $__internal_41eee49b6a2ba5c452aa2524af20ebe549b7807be366241957942494a71e2e64->enter($__internal_41eee49b6a2ba5c452aa2524af20ebe549b7807be366241957942494a71e2e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Admin
";
        
        $__internal_41eee49b6a2ba5c452aa2524af20ebe549b7807be366241957942494a71e2e64->leave($__internal_41eee49b6a2ba5c452aa2524af20ebe549b7807be366241957942494a71e2e64_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_858593f50f686f1b9a06220a31b19d8d8930c6dcd55bb4cf813768ca799cf765 = $this->env->getExtension("native_profiler");
        $__internal_858593f50f686f1b9a06220a31b19d8d8930c6dcd55bb4cf813768ca799cf765->enter($__internal_858593f50f686f1b9a06220a31b19d8d8930c6dcd55bb4cf813768ca799cf765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_list_posts");
        echo "\"><button class=\"btn btn-block btn-lg btn-default\">Articles</button></a>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_list_users");
        echo "\"><button class=\"btn btn-block btn-lg btn-default\">Users</button></a>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_proifle");
        echo "\"><button class=\"btn btn-block btn-lg btn-primary\">Profile</button></a>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_logout");
        echo "\"><button class=\"btn btn-block btn-lg btn-danger\">Logout</button></a>
        </div>
    </div>
";
        
        $__internal_858593f50f686f1b9a06220a31b19d8d8930c6dcd55bb4cf813768ca799cf765->leave($__internal_858593f50f686f1b9a06220a31b19d8d8930c6dcd55bb4cf813768ca799cf765_prof);

    }

    public function getTemplateName()
    {
        return "admin/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Admin*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <a href="{{ path('admin_list_posts') }}"><button class="btn btn-block btn-lg btn-default">Articles</button></a>*/
/*             <a href="{{ path('admin_list_users') }}"><button class="btn btn-block btn-lg btn-default">Users</button></a>*/
/*             <a href="{{ path('admin_proifle') }}"><button class="btn btn-block btn-lg btn-primary">Profile</button></a>*/
/*             <a href="{{ path('admin_logout') }}"><button class="btn btn-block btn-lg btn-danger">Logout</button></a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
