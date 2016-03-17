<?php

/* ClientBundle:Default:index.html.twig */
class __TwigTemplate_0eea1e284cedc31d82dceed6b60c59bb5dc0d9ef83af87e398f3fa377b0b50dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ClientBundle:Default:index.html.twig", 1);
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
        $__internal_bd8bae2135662b9ee9db5d351c099c19f84dd41fa7eb36caf3736cf31618a12d = $this->env->getExtension("native_profiler");
        $__internal_bd8bae2135662b9ee9db5d351c099c19f84dd41fa7eb36caf3736cf31618a12d->enter($__internal_bd8bae2135662b9ee9db5d351c099c19f84dd41fa7eb36caf3736cf31618a12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd8bae2135662b9ee9db5d351c099c19f84dd41fa7eb36caf3736cf31618a12d->leave($__internal_bd8bae2135662b9ee9db5d351c099c19f84dd41fa7eb36caf3736cf31618a12d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94577d00732b46643ce99718171063b258c6e5a7c950b251b823044de0d5ecfb = $this->env->getExtension("native_profiler");
        $__internal_94577d00732b46643ce99718171063b258c6e5a7c950b251b823044de0d5ecfb->enter($__internal_94577d00732b46643ce99718171063b258c6e5a7c950b251b823044de0d5ecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<table border=1>
\t\t<tr><th>Surname</th><th>Name</th><th>Login</th><th>Password</th></tr>
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 7
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "surname", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "login", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "password", array()), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t<table>
\t<a href=";
        // line 15
        echo $this->env->getExtension('routing')->getPath("client_add");
        echo ">Register</a>
\t</br>
\t<a href=";
        // line 17
        echo $this->env->getExtension('routing')->getPath("client_login");
        echo ">Login</a>
\t</br>
";
        
        $__internal_94577d00732b46643ce99718171063b258c6e5a7c950b251b823044de0d5ecfb->leave($__internal_94577d00732b46643ce99718171063b258c6e5a7c950b251b823044de0d5ecfb_prof);

    }

    public function getTemplateName()
    {
        return "ClientBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  75 => 15,  72 => 14,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<table border=1>*/
/* 		<tr><th>Surname</th><th>Name</th><th>Login</th><th>Password</th></tr>*/
/* 		{% for c in clients %}*/
/* 			<tr>*/
/* 				<td>{{ c.surname }}</td>*/
/* 				<td>{{ c.name }}</td>*/
/* 				<td>{{ c.login }}</td>*/
/* 				<td>{{ c.password }}</td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 	<table>*/
/* 	<a href={{ path('client_add') }}>Register</a>*/
/* 	</br>*/
/* 	<a href={{ path('client_login') }}>Login</a>*/
/* 	</br>*/
/* {% endblock %}*/
