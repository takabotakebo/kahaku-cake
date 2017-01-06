<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kokyodbs Model
 *
 * @method \App\Model\Entity\Kokyodb get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kokyodb newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kokyodb[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kokyodb|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kokyodb patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kokyodb[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kokyodb findOrCreate($search, callable $callback = null)
 */
class KokyodbsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('kokyodbs');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('category');

        $validator
            ->allowEmpty('subcategory');

        $validator
            ->allowEmpty('scientific_name');

        $validator
            ->allowEmpty('japanese_name');

        $validator
            ->allowEmpty('class_taxon');

        $validator
            ->allowEmpty('class_taxon_ja');

        $validator
            ->allowEmpty('order_taxon');

        $validator
            ->allowEmpty('order_taxon_ja');

        $validator
            ->allowEmpty('family');

        $validator
            ->allowEmpty('family_ja');

        $validator
            ->allowEmpty('subfamily');

        $validator
            ->allowEmpty('subfamily_ja');

        $validator
            ->boolean('first_survey')
            ->allowEmpty('first_survey');

        $validator
            ->boolean('monitor_survey')
            ->allowEmpty('monitor_survey');

        $validator
            ->boolean('second_survey')
            ->allowEmpty('second_survey');

        $validator
            ->allowEmpty('redlist_moe');

        $validator
            ->allowEmpty('redlist_tokyo');

        $validator
            ->allowEmpty('bibiliographies');

        $validator
            ->allowEmpty('notes');

        $validator
            ->allowEmpty('link_url');

        return $validator;
    }
}
