<?php

/* ClientBundle:Default:client_login_form.html.twig */
class __TwigTemplate_200358293933d4af09e421f99b5a0a10fc59e211bf340b96386166c51f0a7b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ClientBundle:Default:client_login_form.html.twig", 1);
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
        $__internal_e7ca4f9244f7a753d9733472f99c4b6a7902fd85664825380a353f1180c3f4bd = $this->env->getExtension("native_profiler");
        $__internal_e7ca4f9244f7a753d9733472f99c4b6a7902fd85664825380a353f1180c3f4bd->enter($__internal_e7ca4f9244f7a753d9733472f99c4b6a7902fd85664825380a353f1180c3f4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientBundle:Default:client_login_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ca4f9244f7a753d9733472f99c4b6a7902fd85664825380a353f1180c3f4bd->leave($__internal_e7ca4f9244f7a753d9733472f99c4b6a7902fd85664825380a353f1180c3f4bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_620760e051e81fe4a4dfccdf6cde6a0aa44a8cf650c88e70bfdaba4c2f261f06 = $this->env->getExtension("native_profiler");
        $__internal_620760e051e81fe4a4dfccdf6cde6a0aa44a8cf650c88e70bfdaba4c2f261f06->enter($__internal_620760e051e81fe4a4dfccdf6cde6a0aa44a8cf650c88e70bfdaba4c2f261f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<input type=\"submit\" value=\"Login\" />
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<a href=";
        // line 8
        echo $this->env->getExtension('routing')->getPath("client_homepage");
        echo ">Cancel</a>
";
        
        $__internal_620760e051e81fe4a4dfccdf6cde6a0aa44a8cf650c88e70bfdaba4c2f261f06->leave($__internal_620760e051e81fe4a4dfccdf6cde6a0aa44a8cf650c88e70bfdaba4c2f261f06_prof);

    }

    public function getTemplateName()
    {
        return "ClientBundle:Default:client_login_form.html.twig";
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
/* 			<input type="submit" value="Login" />*/
/* 	{{ form_end(form) }}*/
/* 	<a href={{ path('client_homepage') }}>Cancel</a>*/
/* {% endblock %}*/
