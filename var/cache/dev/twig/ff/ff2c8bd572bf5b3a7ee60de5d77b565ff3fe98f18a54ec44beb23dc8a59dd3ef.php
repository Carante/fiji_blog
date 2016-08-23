<?php

/* home/home.html.twig */
class __TwigTemplate_0f10694c9a5b9edc3765196c1a418497894018112f0616bcf59b1700031675e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "home/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7075c63181c6b933f21a7be239c68b00f44176188d04fb984451b81b6e7c527a = $this->env->getExtension("native_profiler");
        $__internal_7075c63181c6b933f21a7be239c68b00f44176188d04fb984451b81b6e7c527a->enter($__internal_7075c63181c6b933f21a7be239c68b00f44176188d04fb984451b81b6e7c527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7075c63181c6b933f21a7be239c68b00f44176188d04fb984451b81b6e7c527a->leave($__internal_7075c63181c6b933f21a7be239c68b00f44176188d04fb984451b81b6e7c527a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f55cd8eb2517f75b4a3bdcfd3193e9ab3fc7883ccfa14a719c3ee1c552ef9fb7 = $this->env->getExtension("native_profiler");
        $__internal_f55cd8eb2517f75b4a3bdcfd3193e9ab3fc7883ccfa14a719c3ee1c552ef9fb7->enter($__internal_f55cd8eb2517f75b4a3bdcfd3193e9ab3fc7883ccfa14a719c3ee1c552ef9fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h1>Simple Sidebar</h1>
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on
                smaller screens, and will appear non-collapsed on larger screens. When toggled using the
                button below, the menu will appear/disappear. On small screens, the page content will be
                pushed off canvas.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 16
            echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"well\">
                    <h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h3>
                    <h6>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "html", null, true);
            echo "</h6>
                    <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
";
        
        $__internal_f55cd8eb2517f75b4a3bdcfd3193e9ab3fc7883ccfa14a719c3ee1c552ef9fb7->leave($__internal_f55cd8eb2517f75b4a3bdcfd3193e9ab3fc7883ccfa14a719c3ee1c552ef9fb7_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  69 => 20,  65 => 19,  61 => 18,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <h1>Simple Sidebar</h1>*/
/*             <p>This template has a responsive menu toggling system. The menu will appear collapsed on*/
/*                 smaller screens, and will appear non-collapsed on larger screens. When toggled using the*/
/*                 button below, the menu will appear/disappear. On small screens, the page content will be*/
/*                 pushed off canvas.</p>*/
/*             <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         {% for article in articles %}*/
/*             <div class="col-sm-6 col-md-4">*/
/*                 <div class="well">*/
/*                     <h3>{{ article.title }}</h3>*/
/*                     <h6>{{ article.dateAdded }}</h6>*/
/*                     <p>{{ article.description }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
