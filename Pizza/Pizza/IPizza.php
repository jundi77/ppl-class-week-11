<?php
    interface IPizza {
        public function AddTopping($topping);
        public function Prepare();
        public function Serve();
    }
?>