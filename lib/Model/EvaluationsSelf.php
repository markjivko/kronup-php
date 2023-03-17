<?php

/**
 * Evaluations__self Model
 *
 * @copyright (c) 2022-2023 kronup.com
 * @license   Apache 2.0
 * @package   Kronup
 * @author    Mark Jivko
 * @link      https://kronup.com/
 *
 * NOTE: This class is auto-generated by kronup.com
 * Do not edit this file manually!
 */

namespace Kronup\Model;
!defined("KRONUP-SDK") && exit();

/**
 * Evaluations__self Model
 */
class EvaluationsSelf extends AbstractModel {

    public const _D = null;
    protected static $_name = "Evaluations__self";
    protected static $_definition = [
        "count" => ["count", "float", null, "getCount", "setCount", null, ["r" => 0]], 
        "average" => ["average", "string", null, "getAverage", "setAverage", null, ["r" => 0]], 
        "recent" => ["recent", "float[]", null, "getRecent", "setRecent", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * EvaluationsSelf
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get count - Total number of evaluations
     *
     * @return float|null
     */
    public function getCount(): ?float {
        return $this->_data["count"];
    }

    /**
     * Set count - Total number of evaluations
     * 
     * @param float|null $count Total number of evaluations
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCount($count) {
        return $this->_set("count", $count);
    }

    /**
     * Get average - Average value
     *
     * @return string|null
     */
    public function getAverage(): ?string {
        return $this->_data["average"];
    }

    /**
     * Set average - Average value
     * 
     * @param string|null $average Average value
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAverage($average) {
        return $this->_set("average", $average);
    }

    /**
     * Get recent - Recent grades
     *
     * @return float[]|null
     */
    public function getRecent(): ?array {
        return $this->_data["recent"];
    }

    /**
     * Set recent - Recent grades
     * 
     * @param float[]|null $recent Recent grades
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecent(?array $recent) {
        return $this->_set("recent", $recent);
    }
}