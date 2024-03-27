<?php

class QnA {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function readQnA() {
        $qnaArray = array();

        $query = "SELECT * FROM qna";
        $result = $this->db->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $qnaArray[] = array('question' => $row['question'], 'answer' => $row['answer']);
            }
        }

        return $qnaArray;
    }

}

?>