<?php

/* home/index.html.twig */
class __TwigTemplate_ff534a64d6ffe6cf6e7344626948769a6477b20a08dd614a47dd2ecd4179df0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "home/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac0b1820b9acb05fe92c8f1135d521fe627a486b682052c836bd122d01fa0056 = $this->env->getExtension("native_profiler");
        $__internal_ac0b1820b9acb05fe92c8f1135d521fe627a486b682052c836bd122d01fa0056->enter($__internal_ac0b1820b9acb05fe92c8f1135d521fe627a486b682052c836bd122d01fa0056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac0b1820b9acb05fe92c8f1135d521fe627a486b682052c836bd122d01fa0056->leave($__internal_ac0b1820b9acb05fe92c8f1135d521fe627a486b682052c836bd122d01fa0056_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
