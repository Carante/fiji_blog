<?php

/* admin/list_posts.html.twig */
class __TwigTemplate_226fb696d6311fe1516689362ee69da72ddfee8982e64473e5083efd4d601064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::_adminNav.html.twig", "admin/list_posts.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::_adminNav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b827edabc9dc94d615c475f7f866203c06e5c2f0d0e5af7bb995b18c1bc5e9ce = $this->env->getExtension("native_profiler");
        $__internal_b827edabc9dc94d615c475f7f866203c06e5c2f0d0e5af7bb995b18c1bc5e9ce->enter($__internal_b827edabc9dc94d615c475f7f866203c06e5c2f0d0e5af7bb995b18c1bc5e9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/list_posts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b827edabc9dc94d615c475f7f866203c06e5c2f0d0e5af7bb995b18c1bc5e9ce->leave($__internal_b827edabc9dc94d615c475f7f866203c06e5c2f0d0e5af7bb995b18c1bc5e9ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_300664dfa56c74de3401a57ceea2dfa6fa02346ad7f85b8e92c4ff8009772631 = $this->env->getExtension("native_profiler");
        $__internal_300664dfa56c74de3401a57ceea2dfa6fa02346ad7f85b8e92c4ff8009772631->enter($__internal_300664dfa56c74de3401a57ceea2dfa6fa02346ad7f85b8e92c4ff8009772631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Admin - list posts
";
        
        $__internal_300664dfa56c74de3401a57ceea2dfa6fa02346ad7f85b8e92c4ff8009772631->leave($__internal_300664dfa56c74de3401a57ceea2dfa6fa02346ad7f85b8e92c4ff8009772631_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec20cd3ac5d8e84f10d33915b8c11f200c333e3ce864e213b9fcd1c4349728a4 = $this->env->getExtension("native_profiler");
        $__internal_ec20cd3ac5d8e84f10d33915b8c11f200c333e3ce864e213b9fcd1c4349728a4->enter($__internal_ec20cd3ac5d8e84f10d33915b8c11f200c333e3ce864e213b9fcd1c4349728a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <table class=\"table table-striped\">
        <thead>
        <tr class=\"bg-info\">
            <th>Date added</th>
            <th>Title</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "dateAdded", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post", array("postId" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success\">Edit</button></a></td>
                <td><a href=\"\"><button class=\"btn btn-danger\">Delete</button></a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
        
        $__internal_ec20cd3ac5d8e84f10d33915b8c11f200c333e3ce864e213b9fcd1c4349728a4->leave($__internal_ec20cd3ac5d8e84f10d33915b8c11f200c333e3ce864e213b9fcd1c4349728a4_prof);

    }

    public function getTemplateName()
    {
        return "admin/list_posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  73 => 21,  69 => 20,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::_adminNav.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Admin - list posts*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr class="bg-info">*/
/*             <th>Date added</th>*/
/*             <th>Title</th>*/
/*             <th>Description</th>*/
/*             <th>Edit</th>*/
/*             <th>Delete</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for article in articles %}*/
/*             <tr>*/
/*                 <td>{{ article.dateAdded }}</td>*/
/*                 <td>{{ article.title }}</td>*/
/*                 <td>{{ article.description }}</td>*/
/*                 <td><a href="{{ path('admin_post', {'postId': article.id}) }}"><button class="btn btn-success">Edit</button></a></td>*/
/*                 <td><a href=""><button class="btn btn-danger">Delete</button></a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* */
