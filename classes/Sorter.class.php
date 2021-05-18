<?php

    class Sorter
    {
        /**
         * Undocumented variable.
         *
         * @var array
         */
        private $data;

        public function __construct(array $newData)
        {
            $this->setData($newData);
        }

        /**
         * Get undocumented variable.
         *
         * @return array
         */
        public function getData()
        {
            return $this->data;
        }

        /**
         * Set undocumented variable.
         *
         * @param array $data undocumented variable
         *
         * @return self
         */
        public function setData(?array $data)
        {
            $this->data = $data;

            return $this;
        }

        public function sortArray()
        {
            if (empty($this->data)) {
                return "L'array est vide";
            }

            sort($this->data, SORT_NATURAL);

            return $this->getData();
        }
    }
