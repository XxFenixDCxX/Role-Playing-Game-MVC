<?php

require_once(dirname(__FILE__) . '\..\conf\PersistentManager.php');

class CreatureDAO {

    //Se define una constante con el nombre de la tabla
    const CREATURE_TABLE = 'creature';

    //Conexión a BD
    private $conn = null;

    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll() {
        $query = "SELECT * FROM " . CreatureDAO::CREATURE_TABLE;
        $result = mysqli_query($this->conn, $query);
        $creatures= array();
        while ($creatureBD = mysqli_fetch_array($result)) {

            $creatureCandidate = new Creature();
            $creatureCandidate->setIdCreature($creatureBD["idCreature"]);
            $creatureCandidate->setName($creatureBD["name"]);
            $creatureCandidate->setDescription($creatureBD["description"]);
            $creatureCandidate->setAvatar($creatureBD["avatar"]);
            $creatureCandidate->setAttackPower($creatureBD["attackPower"]);
            $creatureCandidate->setLifeLevel($creatureBD["lifeLevel"]);
            $creatureCandidate->setWeapon($creatureBD["weapon"]);
            
            array_push($creatures, $creatureCandidate);
        }
        return $creatures;
    }

    public function insert($candidate) {
        $query = "INSERT INTO " . CreatureDAO::CREATURE_TABLE .
                " (name, description, avatar, attackPower, lifeLevel, weapon) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $candidate->getName();
        $description = $candidate->getDescription();
        $avatar = $candidate->getAvatar();
        $attackPower = $candidate->getAttackPower();
        $lifeLevel = $candidate->getLifeLevel();
        $weapon = $candidate->getWeapon();
        
        mysqli_stmt_bind_param($stmt, 'ssssss', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);
        return $stmt->execute();
    }

    public function selectById($id) {
        $query = "SELECT name, description, avatar, attackPower, lifeLevel, weapon FROM " . CreatureDAO::CREATURE_TABLE . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);

        $candidate = new Creature();
        while (mysqli_stmt_fetch($stmt)) {
            $candidate->setIdCreature($id);
            $candidate->setName($name);
            $candidate->setDescription($description);
            $candidate->setAvatar($avatar);
            $candidate->setAttackPower($attackPower);
            $candidate->setLifeLevel($lifeLevel);
            $candidate->setWeapon($weapon);
       }

        return $candidate;
    }

    public function update($candidate) {
        $query = "UPDATE " . CreatureDAO::CREATURE_TABLE .
                " SET name=?, description=?, avatar=?, attackPower=?, lifeLevel=?, weapon=?"
                . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $candidate->getName();
        $description = $candidate->getDescription();
        $avatar = $candidate->getAvatar();
        $attackPower = $candidate->getAttackPower();
        $lifeLevel = $candidate->getLifeLevel();
        $weapon = $candidate->getWeapon();
        $id = $candidate->getIdCreature();
        mysqli_stmt_bind_param($stmt, 'ssssssi', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon, $id);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $query = "DELETE FROM " . CreatureDAO::CREATURE_TABLE . " WHERE idCreature =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }

        
}

