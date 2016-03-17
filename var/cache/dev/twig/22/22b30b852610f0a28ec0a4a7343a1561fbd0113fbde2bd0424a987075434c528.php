<?php

/* base.html.twig */
class __TwigTemplate_bdb96e09a3eb903eb4f13c23102dc8ea111097537c42f9a476229d052393b4f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9dc70775e229f0f7e83ececbd57f03d334acf27e2bbd8df8d8fc071fef37e8d = $this->env->getExtension("native_profiler");
        $__internal_d9dc70775e229f0f7e83ececbd57f03d334acf27e2bbd8df8d8fc071fef37e8d->enter($__internal_d9dc70775e229f0f7e83ececbd57f03d334acf27e2bbd8df8d8fc071fef37e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d9dc70775e229f0f7e83ececbd57f03d334acf27e2bbd8df8d8fc071fef37e8d->leave($__internal_d9dc70775e229f0f7e83ececbd57f03d334acf27e2bbd8df8d8fc071fef37e8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9e3e52166d29abc22d9d7f8c82feaa188e20e92ea0a0b8233604c58b550ab5d = $this->env->getExtension("native_profiler");
        $__internal_c9e3e52166d29abc22d9d7f8c82feaa188e20e92ea0a0b8233604c58b550ab5d->enter($__internal_c9e3e52166d29abc22d9d7f8c82feaa188e20e92ea0a0b8233604c58b550ab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c9e3e52166d29abc22d9d7f8c82feaa188e20e92ea0a0b8233604c58b550ab5d->leave($__internal_c9e3e52166d29abc22d9d7f8c82feaa188e20e92ea0a0b8233604c58b550ab5d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0ea5523a43efd3b14664869195261fe53988f6e2c7bcad04cd8a9c53df968a6 = $this->env->getExtension("native_profiler");
        $__internal_c0ea5523a43efd3b14664869195261fe53988f6e2c7bcad04cd8a9c53df968a6->enter($__internal_c0ea5523a43efd3b14664869195261fe53988f6e2c7bcad04cd8a9c53df968a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c0ea5523a43efd3b14664869195261fe53988f6e2c7bcad04cd8a9c53df968a6->leave($__internal_c0ea5523a43efd3b14664869195261fe53988f6e2c7bcad04cd8a9c53df968a6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5116b62750a33e38a9c4617481ce6fb668edbf22f847a760fb34abe046334cf5 = $this->env->getExtension("native_profiler");
        $__internal_5116b62750a33e38a9c4617481ce6fb668edbf22f847a760fb34abe046334cf5->enter($__internal_5116b62750a33e38a9c4617481ce6fb668edbf22f847a760fb34abe046334cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5116b62750a33e38a9c4617481ce6fb668edbf22f847a760fb34abe046334cf5->leave($__internal_5116b62750a33e38a9c4617481ce6fb668edbf22f847a760fb34abe046334cf5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_367c5ae8864a95b3a360d5924f29812a8b0a2d83eeeb4115b761a04c38a4b096 = $this->env->getExtension("native_profiler");
        $__internal_367c5ae8864a95b3a360d5924f29812a8b0a2d83eeeb4115b761a04c38a4b096->enter($__internal_367c5ae8864a95b3a360d5924f29812a8b0a2d83eeeb4115b761a04c38a4b096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_367c5ae8864a95b3a360d5924f29812a8b0a2d83eeeb4115b761a04c38a4b096->leave($__internal_367c5ae8864a95b3a360d5924f29812a8b0a2d83eeeb4115b761a04c38a4b096_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
