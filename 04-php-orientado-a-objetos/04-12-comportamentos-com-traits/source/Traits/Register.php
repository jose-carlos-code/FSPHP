<?php
namespace Source\Traits;
class Register{
    use UserTrait;
    use AddressTrait;
    public function __construct(User $user, Adress $adress){
        $this->setUser($user);
        $this->setAdress($adress);
        $this->save();
    }

    private function save(){
        $this->user->id = 232;
        $this->address->user_id = $this->user->id;
    } 
}