<?php

/* ProductBundle:Default:index.html.twig */
class __TwigTemplate_fd20016f2d6ba8fed4ee75022a026e76af53bd9b8f5ffb1e79f75d9eb670374c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Default:index.html.twig", 1);
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
        $__internal_a4c7fd117fa2aa2c6d3afc1b8c831c5b3f4d16a1a1f8b7162eb2ca2377f91d3d = $this->env->getExtension("native_profiler");
        $__internal_a4c7fd117fa2aa2c6d3afc1b8c831c5b3f4d16a1a1f8b7162eb2ca2377f91d3d->enter($__internal_a4c7fd117fa2aa2c6d3afc1b8c831c5b3f4d16a1a1f8b7162eb2ca2377f91d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4c7fd117fa2aa2c6d3afc1b8c831c5b3f4d16a1a1f8b7162eb2ca2377f91d3d->leave($__internal_a4c7fd117fa2aa2c6d3afc1b8c831c5b3f4d16a1a1f8b7162eb2ca2377f91d3d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e574397111712b600b19bc47828f328fa921bb0065d1f3a10358574199328f75 = $this->env->getExtension("native_profiler");
        $__internal_e574397111712b600b19bc47828f328fa921bb0065d1f3a10358574199328f75->enter($__internal_e574397111712b600b19bc47828f328fa921bb0065d1f3a10358574199328f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<table border=1>
\t\t<tr><th>Name</th><th>Price</th><th>Description</th></tr>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 7
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "price", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo ">Edit</a></td>
\t\t\t\t<td><a href=";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo ">Del</a></td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t<table>
\t<a href=";
        // line 16
        echo $this->env->getExtension('routing')->getPath("product_add");
        echo ">Add product</a>
";
        
        $__internal_e574397111712b600b19bc47828f328fa921bb0065d1f3a10358574199328f75->leave($__internal_e574397111712b600b19bc47828f328fa921bb0065d1f3a10358574199328f75_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  76 => 15,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<table border=1>*/
/* 		<tr><th>Name</th><th>Price</th><th>Description</th></tr>*/
/* 		{% for p in products %}*/
/* 			<tr>*/
/* 				<td>{{ p.name }}</td>*/
/* 				<td>{{ p.price }}</td>*/
/* 				<td>{{ p.description }}</td>*/
/* 				<td><a href={{ path('product_edit', {'id' :p.id} ) }}>Edit</a></td>*/
/* 				<td><a href={{ path('product_delete', {'id' :p.id} ) }}>Del</a></td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 	<table>*/
/* 	<a href={{ path('product_add') }}>Add product</a>*/
/* {% endblock %}*/
