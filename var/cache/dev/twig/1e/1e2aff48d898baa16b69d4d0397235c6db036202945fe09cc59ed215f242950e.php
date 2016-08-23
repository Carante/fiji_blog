<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a88c933242fbe4e5270c19d6494790ed82b772a60aaed961f9f16bcd10c9aa6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4672cf401d55ba067903940803795a6eafe39d9b2ebe0840e5745b66cccca6e6 = $this->env->getExtension("native_profiler");
        $__internal_4672cf401d55ba067903940803795a6eafe39d9b2ebe0840e5745b66cccca6e6->enter($__internal_4672cf401d55ba067903940803795a6eafe39d9b2ebe0840e5745b66cccca6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4672cf401d55ba067903940803795a6eafe39d9b2ebe0840e5745b66cccca6e6->leave($__internal_4672cf401d55ba067903940803795a6eafe39d9b2ebe0840e5745b66cccca6e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_578a3b0a342df51eb7441299780d0678ae01875a58fa654409d4d2443d29ec60 = $this->env->getExtension("native_profiler");
        $__internal_578a3b0a342df51eb7441299780d0678ae01875a58fa654409d4d2443d29ec60->enter($__internal_578a3b0a342df51eb7441299780d0678ae01875a58fa654409d4d2443d29ec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_578a3b0a342df51eb7441299780d0678ae01875a58fa654409d4d2443d29ec60->leave($__internal_578a3b0a342df51eb7441299780d0678ae01875a58fa654409d4d2443d29ec60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbb47f912e866b3aa4e45a6892a2b3c5f7ac67f0fcd127def80c88ac9c0b04c3 = $this->env->getExtension("native_profiler");
        $__internal_cbb47f912e866b3aa4e45a6892a2b3c5f7ac67f0fcd127def80c88ac9c0b04c3->enter($__internal_cbb47f912e866b3aa4e45a6892a2b3c5f7ac67f0fcd127def80c88ac9c0b04c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cbb47f912e866b3aa4e45a6892a2b3c5f7ac67f0fcd127def80c88ac9c0b04c3->leave($__internal_cbb47f912e866b3aa4e45a6892a2b3c5f7ac67f0fcd127def80c88ac9c0b04c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_082cd3ac39bd0906f6ba8e7f0c2fb4e66d3e1b3148fbec4ce587f4bcc9f4979a = $this->env->getExtension("native_profiler");
        $__internal_082cd3ac39bd0906f6ba8e7f0c2fb4e66d3e1b3148fbec4ce587f4bcc9f4979a->enter($__internal_082cd3ac39bd0906f6ba8e7f0c2fb4e66d3e1b3148fbec4ce587f4bcc9f4979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_082cd3ac39bd0906f6ba8e7f0c2fb4e66d3e1b3148fbec4ce587f4bcc9f4979a->leave($__internal_082cd3ac39bd0906f6ba8e7f0c2fb4e66d3e1b3148fbec4ce587f4bcc9f4979a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
