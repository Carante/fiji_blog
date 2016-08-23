<?php

/* admin/profile.html.twig */
class __TwigTemplate_0916a7e2d67273f641f931f9635255c8196966c0e3e97d54d268d7e3e84dec8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::_adminNav.html.twig", "admin/profile.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::_adminNav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b14dfbe25b44a745b13880065f55b414bef5f5064693fd0f5ac7a97be15d9d11 = $this->env->getExtension("native_profiler");
        $__internal_b14dfbe25b44a745b13880065f55b414bef5f5064693fd0f5ac7a97be15d9d11->enter($__internal_b14dfbe25b44a745b13880065f55b414bef5f5064693fd0f5ac7a97be15d9d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b14dfbe25b44a745b13880065f55b414bef5f5064693fd0f5ac7a97be15d9d11->leave($__internal_b14dfbe25b44a745b13880065f55b414bef5f5064693fd0f5ac7a97be15d9d11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34cb415fb2437cbdd5391a1163368e484d8e8c9fd4facd3e3040630c6ae7141a = $this->env->getExtension("native_profiler");
        $__internal_34cb415fb2437cbdd5391a1163368e484d8e8c9fd4facd3e3040630c6ae7141a->enter($__internal_34cb415fb2437cbdd5391a1163368e484d8e8c9fd4facd3e3040630c6ae7141a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div>
       <div class=\"row\">
           <div class=\"col-sm-6\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_list_users");
        echo "\"><button class=\"btn btn-block btn-lg btn-default\">Users</button></a></div>
           <div class=\"col-sm-6\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_list_posts");
        echo "\"><button class=\"btn btn-block btn-lg btn-primary\">Articles</button></a></div>
       </div>
       <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_logout");
        echo "\"><button class=\"btn btn-lg btn-block btn-danger\">Logout</button></a>
   </div>
";
        
        $__internal_34cb415fb2437cbdd5391a1163368e484d8e8c9fd4facd3e3040630c6ae7141a->leave($__internal_34cb415fb2437cbdd5391a1163368e484d8e8c9fd4facd3e3040630c6ae7141a_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3ef594f2ff41566ee8c3d8064a1f9cede0d210d5c6ff9b162e08c48eee8608d = $this->env->getExtension("native_profiler");
        $__internal_c3ef594f2ff41566ee8c3d8064a1f9cede0d210d5c6ff9b162e08c48eee8608d->enter($__internal_c3ef594f2ff41566ee8c3d8064a1f9cede0d210d5c6ff9b162e08c48eee8608d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "    Admin - Profile
";
        
        $__internal_c3ef594f2ff41566ee8c3d8064a1f9cede0d210d5c6ff9b162e08c48eee8608d->leave($__internal_c3ef594f2ff41566ee8c3d8064a1f9cede0d210d5c6ff9b162e08c48eee8608d_prof);

    }

    public function getTemplateName()
    {
        return "admin/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  54 => 9,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::_adminNav.html.twig' %}*/
/* */
/* {% block body %}*/
/*    <div>*/
/*        <div class="row">*/
/*            <div class="col-sm-6"><a href="{{ path('admin_list_users') }}"><button class="btn btn-block btn-lg btn-default">Users</button></a></div>*/
/*            <div class="col-sm-6"><a href="{{ path('admin_list_posts') }}"><button class="btn btn-block btn-lg btn-primary">Articles</button></a></div>*/
/*        </div>*/
/*        <a href="{{ path('admin_logout') }}"><button class="btn btn-lg btn-block btn-danger">Logout</button></a>*/
/*    </div>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     Admin - Profile*/
/* {% endblock %}*/
/* */
/* */
