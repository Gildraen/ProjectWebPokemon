<?php
use App\Models\Block;
use Pokemon\Pokemon;

class ListeCarteService {
    
    
    public function getAllBlocks() {
        $blocks = Block::where('univers', 'Pokemon')->orderBy('id')->get();
        return $blocks;
    }
    
    public function getSetsByBlock($id) {
        $block = Block::where('id' , $id)->first();
        $sets = Pokemon::Set()->where(['series' => $block->name])->all();
        
        return $sets;
    }
    
    public function getCardsBySet($setCode) {
        
        $cards = Pokemon::Card()->where(['setCode' => $setCode])->all();
        
        usort($cards, function($a, $b) {
            return $a->getNumber() > $b->getNumber();
        });
        
        return $cards;
    }
}