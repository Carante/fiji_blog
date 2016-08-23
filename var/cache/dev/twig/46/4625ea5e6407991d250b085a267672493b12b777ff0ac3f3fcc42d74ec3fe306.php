<?php

/* article/show.html.twig */
class __TwigTemplate_c988ae8d909020995ea07e5be3e1bfca8e73d42f789bcc452c1d3f85cebf8bc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "article/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1798557dd7bfe9263d23fb73accbf02b7867df4ea2ce8a4e6e7842cef5dd2060 = $this->env->getExtension("native_profiler");
        $__internal_1798557dd7bfe9263d23fb73accbf02b7867df4ea2ce8a4e6e7842cef5dd2060->enter($__internal_1798557dd7bfe9263d23fb73accbf02b7867df4ea2ce8a4e6e7842cef5dd2060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1798557dd7bfe9263d23fb73accbf02b7867df4ea2ce8a4e6e7842cef5dd2060->leave($__internal_1798557dd7bfe9263d23fb73accbf02b7867df4ea2ce8a4e6e7842cef5dd2060_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_165c962490d82d47c41391a1096ec89094416830453b196b664e4314fcc1a875 = $this->env->getExtension("native_profiler");
        $__internal_165c962490d82d47c41391a1096ec89094416830453b196b664e4314fcc1a875->enter($__internal_165c962490d82d47c41391a1096ec89094416830453b196b664e4314fcc1a875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["article"]);
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h1>
            <h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "html", null, true);
            echo "</h3>
            <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
";
        
        $__internal_165c962490d82d47c41391a1096ec89094416830453b196b664e4314fcc1a875->leave($__internal_165c962490d82d47c41391a1096ec89094416830453b196b664e4314fcc1a875_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6cf1c110a1ccf37a2ba9e1c2aa087965e865bc4326ac55ff0a01d825a7ab53b = $this->env->getExtension("native_profiler");
        $__internal_f6cf1c110a1ccf37a2ba9e1c2aa087965e865bc4326ac55ff0a01d825a7ab53b->enter($__internal_f6cf1c110a1ccf37a2ba9e1c2aa087965e865bc4326ac55ff0a01d825a7ab53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
";
        
        $__internal_f6cf1c110a1ccf37a2ba9e1c2aa087965e865bc4326ac55ff0a01d825a7ab53b->leave($__internal_f6cf1c110a1ccf37a2ba9e1c2aa087965e865bc4326ac55ff0a01d825a7ab53b_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  73 => 12,  65 => 9,  57 => 7,  53 => 6,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/*     <div>*/
/*         {% for article in article %}*/
/*             <h1>{{ article.title }}</h1>*/
/*             <h3>{{ article.dateAdded }}</h3>*/
/*             <p>{{ article.description }}</p>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ title }}*/
/* {% endblock %}*/
