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
                " (company, position, function) VALUES(?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $company = $candidate->getCompany();
        $position = $candidate->getPosition();
        $function = $candidate->getFunction();
        
        mysqli_stmt_bind_param($stmt, 'sss', $company, $position, $function);
        return $stmt->execute();
    }

    public function selectById($id) {
        $query = "SELECT company, position, function FROM " . CreatureDAO::CREATURE_TABLE . " WHERE id=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $company, $position, $function);

        $candidate = new Creature();
        while (mysqli_stmt_fetch($stmt)) {
            $candidate->setIdOffer($id);
            $candidate->setCompany($company);
            $candidate->setPosition($position);
            $candidate->setFunction($function);
       }

        return $candidate;
    }

    public function update($candidate) {
        $query = "UPDATE " . CreatureDAO::CREATURE_TABLE .
                " SET company=?, position=?, function=?"
                . " WHERE id=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $company = $candidate->getCompany();
        $position= $candidate->getPosition();
        $function = $candidate->getFunction();
        $id = $candidate->getIdOffer();
        mysqli_stmt_bind_param($stmt, 'sssi', $company, $position, $function, $id);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $query = "DELETE FROM " . CreatureDAO::CREATURE_TABLE . " WHERE id =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        return $stmt->execute();
    }

        
}

