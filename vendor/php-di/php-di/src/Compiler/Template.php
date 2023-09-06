/**
 * This class has been auto-generated by PHP-DI.
 */
class <?=$this->containerClass; ?> extends <?=$this->containerParentClass; ?>
{
    const METHOD_MAPPING = <?php var_export($this->entryToMethodMapping); ?>;

<?php foreach ($this->methods as $methodName => $methodContent) : ?>
    protected function <?=$methodName; ?>()
    {
        <?=$methodContent; ?>

    }

<?php endforeach; ?>
}
