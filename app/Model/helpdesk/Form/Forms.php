<?php

namespace App\Model\helpdesk\Form;

use App\BaseModel;

class Forms extends BaseModel
{
    protected $table = 'custom_forms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['formname'];

    public function deleteFormChild()
    {
        $childs = $this->formValueChild();
        if ($childs->count() > 0) {
            foreach ($childs as $child) {
                $child->child_id = null;
                $child->save();
            }
        }
    }

    public function formValueChild()
    {
        $childs = $this->formValueRelation()->get();

        return $childs;
    }

    public function formValueRelation()
    {
        $related = "App\Model\helpdesk\Form\FieldValue";

        return $this->hasMany($related, 'child_id');
    }

    public function delete()
    {
        $this->fieldsDelete();
        parent::delete();
    }

    public function fieldsDelete()
    {
        $fields = $this->fields();
        if ($fields->count() > 0) {
            foreach ($fields as $field) {
                $field->delete();
            }
        }
    }

    public function fields()
    {
        $relation = $this->fieldRelation()->get();

        return $relation;
    }

    public function fieldRelation()
    {
        $related = "App\Model\helpdesk\Form\Fields";

        return $this->hasMany($related);
    }
}
