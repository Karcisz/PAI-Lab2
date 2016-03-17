<?php

/* ClientBundle:Default:client_form.html.twig */
class __TwigTemplate_e3dce3af501bb1fdd8330e88a8166ebce247584f85143220eb73e5287cefd394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ClientBundle:Default:client_form.html.twig", 1);
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
        $__internal_a549d17e37b837aec04dccb10bd24ad6bc73289d23e1d602bf1b460da5c82ffc = $this->env->getExtension("native_profiler");
        $__internal_a549d17e37b837aec04dccb10bd24ad6bc73289d23e1d602bf1b460da5c82ffc->enter($__internal_a549d17e37b837aec04dccb10bd24ad6bc73289d23e1d602bf1b460da5c82ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:client_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a549d17e37b837aec04dccb10bd24ad6bc73289d23e1d602bf1b460da5c82ffc->leave($__internal_a549d17e37b837aec04dccb10bd24ad6bc73289d23e1d602bf1b460da5c82ffc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaaa13d90ca278eedf544cac0ee6c0c23ac7036e27ddac92044f11d6e2f68bdd = $this->env->getExtension("native_profiler");
        $__internal_aaaa13d90ca278eedf544cac0ee6c0c23ac7036e27ddac92044f11d6e2f68bdd->enter($__internal_aaaa13d90ca278eedf544cac0ee6c0c23ac7036e27ddac92044f11d6e2f68bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<input type=\"submit\" value=\"Register\" />
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<a href=";
        // line 8
        echo $this->env->getExtension('routing')->getPath("client_homepage");
        echo ">Cancel</a>
";
        
        $__internal_aaaa13d90ca278eedf544cac0ee6c0c23ac7036e27ddac92044f11d6e2f68bdd->leave($__internal_aaaa13d90ca278eedf544cac0ee6c0c23ac7036e27ddac92044f11d6e2f68bdd_prof);

    }

    public function getTemplateName()
    {
        return "ClientBundle:Default:client_form.html.twig";
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
/* 			<input type="submit" value="Register" />*/
/* 	{{ form_end(form) }}*/
/* 	<a href={{ path('client_homepage') }}>Cancel</a>*/
/* {% endblock %}*/
