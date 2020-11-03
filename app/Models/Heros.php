<?php
namespace App\Models;

/*
 * Mock travel destination data.修改英雄资料
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Heros {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'IronMan',
            'description' => 'A special administrative region on the eastern side of the Pearl River estuary in southern China.',
            'link' => 'https://baike.baidu.com/item/%E9%92%A2%E9%93%81%E4%BE%A0/303?fr=aladdin',
            'image' => 'IronMan.png',
        ],
        '2' => [
            'id' => 2,
            'name' => 'CaptainAmerica',
            'description' => 'A special administrative region on the western side of the Pearl River estuary in southern China.',
            'link' => 'https://baike.baidu.com/item/%E7%BE%8E%E5%9B%BD%E9%98%9F%E9%95%BF/3472?fr=aladdin',
            'image' => 'CaptainAmerica.png',
        ],
        '3' => [
            'id' => 3,
            'name' => 'GreenGiant',
            'description' => 'A country at the centre of the Southeast Asian Indochinese peninsula composed of 76 provinces.',
            'link' => 'https://baike.baidu.com/item/%E7%BB%BF%E5%B7%A8%E4%BA%BA/65931?fr=aladdin',
            'image' => 'thailand.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'BlackWidow',
            'description' => 'An island country in East Asia.',
            'link' => 'https://baike.baidu.com/item/%E9%BB%91%E5%AF%A1%E5%A6%87/6478268?fr=aladdin',
            'image' => 'BlackWidow.png',
        ],
        '5' => [
            'id' => 5,
            'name' => 'ClintBarton',
            'description' => 'The easternmost country on the Indochina Peninsula.',
            'link' => 'https://baike.baidu.com/item/%E9%B9%B0%E7%9C%BC/15107237?fr=aladdin',
            'image' => 'ClintBarton.png',
        ],
         '6' => [
            'id' => 6,
                'name' => 'Thor',
            'description' => 'The easternmost country on the Indochina Peninsula.',
            'link' => 'https://baike.baidu.com/item/%E9%9B%B7%E7%A5%9E/8321769?fromtitle=%E9%9B%B7%E7%A5%9E%E6%89%98%E5%B0%94&fromid=3804120',
            'image' => 'Quill.png',
             
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}

