<?php

/* ProductBundle:Default:product_form.html.twig */
class __TwigTemplate_cf25661fe67bd261a0ab0a78a83399bdb74a658c965c0506d4111c47e45de299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProductBundle:Default:product_form.html.twig", 1);
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
        $__internal_b53e03507cfc7b42635a57b3b38c104ce32408db03e3fd7299d55c73f75a75e9 = $this->env->getExtension("native_profiler");
        $__internal_b53e03507cfc7b42635a57b3b38c104ce32408db03e3fd7299d55c73f75a75e9->enter($__internal_b53e03507cfc7b42635a57b3b38c104ce32408db03e3fd7299d55c73f75a75e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Default:product_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b53e03507cfc7b42635a57b3b38c104ce32408db03e3fd7299d55c73f75a75e9->leave($__internal_b53e03507cfc7b42635a57b3b38c104ce32408db03e3fd7299d55c73f75a75e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc895fcfb3505aacdb9519d6158ddcc0257de4c3a275eb8b07552cd6c84f62f4 = $this->env->getExtension("native_profiler");
        $__internal_cc895fcfb3505aacdb9519d6158ddcc0257de4c3a275eb8b07552cd6c84f62f4->enter($__internal_cc895fcfb3505aacdb9519d6158ddcc0257de4c3a275eb8b07552cd6c84f62f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<input type=\"submit\" value=\"Add product\" />
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<a href=”";
        // line 8
        echo $this->env->getExtension('routing')->getPath("product_homepage");
        echo "”>Cancel</a>
";
        
        $__internal_cc895fcfb3505aacdb9519d6158ddcc0257de4c3a275eb8b07552cd6c84f62f4->leave($__internal_cc895fcfb3505aacdb9519d6158ddcc0257de4c3a275eb8b07552cd6c84f62f4_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Default:product_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  50 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	{{ form_start(form) }}*/
/* 		{{ form_widget(form) }}*/
/* 		<input type="submit" value="Add product" />*/
/* 	{{ form_end(form) }}*/
/* 	<a href=”{{ path('product_homepage') }}”>Cancel</a>*/
/* {% endblock %}*/
