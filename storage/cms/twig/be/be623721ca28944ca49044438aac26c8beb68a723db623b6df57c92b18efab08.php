<?php

/* D:\xampp\htdocs\laravel_octobercms/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm */
class __TwigTemplate_0ff81ca830561c871756b41d81c0cc8be8bfad79bba5d47f411bf3e8a7271fe0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\laravel_octobercms/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}", "D:\\xampp\\htdocs\\laravel_octobercms/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm", "");
    }
}
