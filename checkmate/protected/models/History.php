<?php

/**
 * This is the model class for table "history".
 *
 * The followings are the available columns in table 'history':
 * @property integer $historyId
 * @property integer $matchId
 * @property integer $ordinal
 * @property integer $piecesId
 * @property integer $positionX
 * @property integer $positionY
 * @property integer $positionOldX
 * @property integer $positionOldY
 * @property integer $typeId
 * @property integer $eatedId
 */
class History extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return History the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'history';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('matchId, ordinal, piecesId, positionX, positionY, positionOldX, positionOldY, typeId', 'required'),
            array('matchId, ordinal, piecesId, positionX, positionY, positionOldX, positionOldY, typeId, eatedId, useSec', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('historyId, matchId, ordinal, piecesId, positionX, positionY, positionOldX, positionOldY, typeId, eatedId, useSec', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'historyId' => 'History',
            'matchId' => 'Match',
            'ordinal' => 'Ordinal',
            'piecesId' => 'Pieces',
            'positionX' => 'Position X',
            'positionY' => 'Position Y',
            'positionOldX' => 'Position Old X',
            'positionOldY' => 'Position Old Y',
            'typeId' => 'Type',
            'eatedId' => 'Eated',
            'useSec' => 'Use Sec',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('historyId', $this->historyId);
        $criteria->compare('matchId', $this->matchId);
        $criteria->compare('ordinal', $this->ordinal);
        $criteria->compare('piecesId', $this->piecesId);
        $criteria->compare('positionX', $this->positionX);
        $criteria->compare('positionY', $this->positionY);
        $criteria->compare('positionOldX', $this->positionOldX);
        $criteria->compare('positionOldY', $this->positionOldY);
        $criteria->compare('typeId', $this->typeId);
        $criteria->compare('eatedId', $this->eatedId);
        $criteria->compare('useSec', $this->useSec);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}