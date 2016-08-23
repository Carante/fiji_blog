<?php

/* admin/list_users.html.twig */
class __TwigTemplate_944de7b614cfae49eedaf30ae71a78ccfb8c62a876f5506ec340ae86bb835811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::_adminNav.html.twig", "admin/list_users.html.twig", 1);
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
        $__internal_181dde2b5d070640661eca8a5951675b43af6329897368b159799d4356ac6006 = $this->env->getExtension("native_profiler");
        $__internal_181dde2b5d070640661eca8a5951675b43af6329897368b159799d4356ac6006->enter($__internal_181dde2b5d070640661eca8a5951675b43af6329897368b159799d4356ac6006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/list_users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_181dde2b5d070640661eca8a5951675b43af6329897368b159799d4356ac6006->leave($__internal_181dde2b5d070640661eca8a5951675b43af6329897368b159799d4356ac6006_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cb46b0ce7d90cdc28f4ff43f611b2c76c1f846f92ad8ee09de263014ce44172 = $this->env->getExtension("native_profiler");
        $__internal_7cb46b0ce7d90cdc28f4ff43f611b2c76c1f846f92ad8ee09de263014ce44172->enter($__internal_7cb46b0ce7d90cdc28f4ff43f611b2c76c1f846f92ad8ee09de263014ce44172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Admin - list posts
";
        
        $__internal_7cb46b0ce7d90cdc28f4ff43f611b2c76c1f846f92ad8ee09de263014ce44172->leave($__internal_7cb46b0ce7d90cdc28f4ff43f611b2c76c1f846f92ad8ee09de263014ce44172_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f07bd584c93473ffa593374c9733f4d8ffc812d160601e9bebbdc09ef161ce7 = $this->env->getExtension("native_profiler");
        $__internal_6f07bd584c93473ffa593374c9733f4d8ffc812d160601e9bebbdc09ef161ce7->enter($__internal_6f07bd584c93473ffa593374c9733f4d8ffc812d160601e9bebbdc09ef161ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <table class=\"table table-striped\">
        <thead>
        <tr class=\"bg-info\">
            <th>Username</th>
            <th>Admin</th>
            <th>Email address</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "        <tr>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            if (($this->getAttribute($context["user"], "admin", array()) == true)) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
            <td><a href=\"\"><button class=\"btn btn-danger\">Delete</button></a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_6f07bd584c93473ffa593374c9733f4d8ffc812d160601e9bebbdc09ef161ce7->leave($__internal_6f07bd584c93473ffa593374c9733f4d8ffc812d160601e9bebbdc09ef161ce7_prof);

    }

    public function getTemplateName()
    {
        return "admin/list_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  87 => 23,  79 => 22,  75 => 21,  72 => 20,  68 => 19,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <th>Username</th>*/
/*             <th>Admin</th>*/
/*             <th>Email address</th>*/
/*             <th>Delete</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*         <tr>*/
/*             <td>{{ user.username }}</td>*/
/*             <td>{% if user.admin == true %}Yes{% else %}No{% endif %}</td>*/
/*             <td>{{ user.email }}</td>*/
/*             <td><a href=""><button class="btn btn-danger">Delete</button></a></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* */
