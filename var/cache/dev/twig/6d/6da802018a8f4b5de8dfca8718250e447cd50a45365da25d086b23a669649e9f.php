<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_10f541a1ee8675f0e29fb0b675e7401c4577fb4e43623b12866e8b976d893a3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bcda4b887b970d05c2284b36f97660ea836b440c34de439a6f4eab553a3ceba = $this->env->getExtension("native_profiler");
        $__internal_6bcda4b887b970d05c2284b36f97660ea836b440c34de439a6f4eab553a3ceba->enter($__internal_6bcda4b887b970d05c2284b36f97660ea836b440c34de439a6f4eab553a3ceba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bcda4b887b970d05c2284b36f97660ea836b440c34de439a6f4eab553a3ceba->leave($__internal_6bcda4b887b970d05c2284b36f97660ea836b440c34de439a6f4eab553a3ceba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b85affad84a063c23935f1da90fa1de99f0fb7de8f334384822309f2dc31c01 = $this->env->getExtension("native_profiler");
        $__internal_7b85affad84a063c23935f1da90fa1de99f0fb7de8f334384822309f2dc31c01->enter($__internal_7b85affad84a063c23935f1da90fa1de99f0fb7de8f334384822309f2dc31c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7b85affad84a063c23935f1da90fa1de99f0fb7de8f334384822309f2dc31c01->leave($__internal_7b85affad84a063c23935f1da90fa1de99f0fb7de8f334384822309f2dc31c01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8926059b879c2e5b64395f0458a70a2dafef7c45dfb2f56028073565ffced14 = $this->env->getExtension("native_profiler");
        $__internal_f8926059b879c2e5b64395f0458a70a2dafef7c45dfb2f56028073565ffced14->enter($__internal_f8926059b879c2e5b64395f0458a70a2dafef7c45dfb2f56028073565ffced14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f8926059b879c2e5b64395f0458a70a2dafef7c45dfb2f56028073565ffced14->leave($__internal_f8926059b879c2e5b64395f0458a70a2dafef7c45dfb2f56028073565ffced14_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f00d22946c2df7c4907a62f7ab9c908f5676b193985917dfa259c50008a6d153 = $this->env->getExtension("native_profiler");
        $__internal_f00d22946c2df7c4907a62f7ab9c908f5676b193985917dfa259c50008a6d153->enter($__internal_f00d22946c2df7c4907a62f7ab9c908f5676b193985917dfa259c50008a6d153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f00d22946c2df7c4907a62f7ab9c908f5676b193985917dfa259c50008a6d153->leave($__internal_f00d22946c2df7c4907a62f7ab9c908f5676b193985917dfa259c50008a6d153_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
