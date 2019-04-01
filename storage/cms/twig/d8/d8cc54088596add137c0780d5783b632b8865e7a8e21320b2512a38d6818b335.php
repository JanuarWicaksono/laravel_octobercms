<?php

/* D:\xampp\htdocs\laravel_octobercms/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm */
class __TwigTemplate_d38d95072728259fa8d8a3c573442ee2b53f73525d369776dbfad497f49c4c77 extends Twig_Template
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
        echo "<h1>Contact Us</h1>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\laravel_octobercms/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
{% component 'contactForm' %}", "D:\\xampp\\htdocs\\laravel_octobercms/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm", "");
    }
}
