<?php

/**
 * Channel_Members_List Model
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
 * Channel_Members_List Model
 */
class ChannelMembersList extends AbstractModel {

    public const _D = null;
    protected static $_name = "Channel_Members_List";
    protected static $_definition = [
        "pageNumber" => ["pageNumber", "int", null, "getPageNumber", "setPageNumber", 1, ["r" => 0, "n" => [1]]], 
        "pageSize" => ["pageSize", "int", null, "getPageSize", "setPageSize", 100, ["r" => 0, "n" => [1], "x" => [500]]], 
        "total" => ["total", "int", null, "getTotal", "setTotal", null, ["r" => 0]], 
        "members" => ["members", "\Kronup\Model\User[]", null, "getMembers", "setMembers", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * ChannelMembersList
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get pageNumber - Page number
     *
     * @return int|null
     */
    public function getPageNumber(): ?int {
        return $this->_data["pageNumber"];
    }

    /**
     * Set pageNumber - Page number
     * 
     * @param int|null $page_number Page number
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageNumber($page_number) {
        return $this->_set("pageNumber", $page_number);
    }

    /**
     * Get pageSize - Page size
     *
     * @return int|null
     */
    public function getPageSize(): ?int {
        return $this->_data["pageSize"];
    }

    /**
     * Set pageSize - Page size
     * 
     * @param int|null $page_size Page size
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPageSize($page_size) {
        return $this->_set("pageSize", $page_size);
    }

    /**
     * Get total - Total number of members
     *
     * @return int|null
     */
    public function getTotal(): ?int {
        return $this->_data["total"];
    }

    /**
     * Set total - Total number of members
     * 
     * @param int|null $total Total number of members
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotal($total) {
        return $this->_set("total", $total);
    }

    /**
     * Get members - User models
     *
     * @return \Kronup\Model\User[]|null
     */
    public function getMembers(): ?array {
        return $this->_data["members"];
    }

    /**
     * Set members - User models
     * 
     * @param \Kronup\Model\User[]|null $members User models
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMembers(?array $members) {
        return $this->_set("members", $members);
    }
}