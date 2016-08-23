<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6e77804b87e220bc364f5cbde45d626270d75d2e3fdd9df917ec0836e46732cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2dba86a5139cca3ccf98f36b2dadb0530105c6e2ed5632f66cfd2413ac943fd = $this->env->getExtension("native_profiler");
        $__internal_b2dba86a5139cca3ccf98f36b2dadb0530105c6e2ed5632f66cfd2413ac943fd->enter($__internal_b2dba86a5139cca3ccf98f36b2dadb0530105c6e2ed5632f66cfd2413ac943fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2dba86a5139cca3ccf98f36b2dadb0530105c6e2ed5632f66cfd2413ac943fd->leave($__internal_b2dba86a5139cca3ccf98f36b2dadb0530105c6e2ed5632f66cfd2413ac943fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b561fec56548d663e9db07640892b6b187114bad5e420d48e9f19751e1e0dc00 = $this->env->getExtension("native_profiler");
        $__internal_b561fec56548d663e9db07640892b6b187114bad5e420d48e9f19751e1e0dc00->enter($__internal_b561fec56548d663e9db07640892b6b187114bad5e420d48e9f19751e1e0dc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b561fec56548d663e9db07640892b6b187114bad5e420d48e9f19751e1e0dc00->leave($__internal_b561fec56548d663e9db07640892b6b187114bad5e420d48e9f19751e1e0dc00_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1eb3e2459d10d382f91361578a78a14e33c5a20716a6eac5e9830df6bd9dbe29 = $this->env->getExtension("native_profiler");
        $__internal_1eb3e2459d10d382f91361578a78a14e33c5a20716a6eac5e9830df6bd9dbe29->enter($__internal_1eb3e2459d10d382f91361578a78a14e33c5a20716a6eac5e9830df6bd9dbe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1eb3e2459d10d382f91361578a78a14e33c5a20716a6eac5e9830df6bd9dbe29->leave($__internal_1eb3e2459d10d382f91361578a78a14e33c5a20716a6eac5e9830df6bd9dbe29_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a449cb2ef8f9e8be86966532eef9bf15638f826e335cbaa7b0ca3b904ec6fe71 = $this->env->getExtension("native_profiler");
        $__internal_a449cb2ef8f9e8be86966532eef9bf15638f826e335cbaa7b0ca3b904ec6fe71->enter($__internal_a449cb2ef8f9e8be86966532eef9bf15638f826e335cbaa7b0ca3b904ec6fe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a449cb2ef8f9e8be86966532eef9bf15638f826e335cbaa7b0ca3b904ec6fe71->leave($__internal_a449cb2ef8f9e8be86966532eef9bf15638f826e335cbaa7b0ca3b904ec6fe71_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
