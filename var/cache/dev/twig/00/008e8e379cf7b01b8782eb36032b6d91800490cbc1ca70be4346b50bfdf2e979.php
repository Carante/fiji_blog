<?php

/* admin/show_post.html.twig */
class __TwigTemplate_2309dc36e3452d631defc50bd3496294065850bbdcf5ca8966bcabd8f50a95e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::_adminNav.html.twig", "admin/show_post.html.twig", 1);
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
        $__internal_076e4b6fcd3a01c85a83fc6f18ae5a48cd898d7c941e3b8ca0c701693fe5a61f = $this->env->getExtension("native_profiler");
        $__internal_076e4b6fcd3a01c85a83fc6f18ae5a48cd898d7c941e3b8ca0c701693fe5a61f->enter($__internal_076e4b6fcd3a01c85a83fc6f18ae5a48cd898d7c941e3b8ca0c701693fe5a61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/show_post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_076e4b6fcd3a01c85a83fc6f18ae5a48cd898d7c941e3b8ca0c701693fe5a61f->leave($__internal_076e4b6fcd3a01c85a83fc6f18ae5a48cd898d7c941e3b8ca0c701693fe5a61f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cb114880de06cab67fdca42e074886fcadec174178f8b0a650ef6306b687849 = $this->env->getExtension("native_profiler");
        $__internal_3cb114880de06cab67fdca42e074886fcadec174178f8b0a650ef6306b687849->enter($__internal_3cb114880de06cab67fdca42e074886fcadec174178f8b0a650ef6306b687849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["article"]);
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h1>
        <h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
";
        
        $__internal_3cb114880de06cab67fdca42e074886fcadec174178f8b0a650ef6306b687849->leave($__internal_3cb114880de06cab67fdca42e074886fcadec174178f8b0a650ef6306b687849_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_11af06f93aab56e268abb2daab827a5aac825208d878c8f72aba9f6966b29026 = $this->env->getExtension("native_profiler");
        $__internal_11af06f93aab56e268abb2daab827a5aac825208d878c8f72aba9f6966b29026->enter($__internal_11af06f93aab56e268abb2daab827a5aac825208d878c8f72aba9f6966b29026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "    Admin - ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
";
        
        $__internal_11af06f93aab56e268abb2daab827a5aac825208d878c8f72aba9f6966b29026->leave($__internal_11af06f93aab56e268abb2daab827a5aac825208d878c8f72aba9f6966b29026_prof);

    }

    public function getTemplateName()
    {
        return "admin/show_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  73 => 13,  65 => 10,  57 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::_adminNav.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         {% for article in article %}*/
/*         <h1>{{ article.title }}</h1>*/
/*         <h3>{{ article.dateAdded }}</h3>*/
/*         <p>{{ article.description }}</p>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     Admin - {{ title }}*/
/* {% endblock %}*/
/* */
/* */
