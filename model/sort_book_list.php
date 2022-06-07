<?php

class sortbook
{
        function ascname()
        {
                require("../model/connectdb.php");
                $sql = "SELECT * FROM books ORDER BY books.Names ASC";
                $result = $conn->query($sql);
                return $result;
        }
        function dscname()
        {
                require("../model/connectdb.php");
                $sql = "SELECT * FROM books ORDER BY books.Names DESC";
                $result = $conn->query($sql);
                return $result;
        }
        function asctype()
        {
                require("../model/connectdb.php");
                $sql = "SELECT * FROM books ORDER BY books.Type ASC";
                $result = $conn->query($sql);
                return $result;
        }
        function dsctype()
        {
                require("../model/connectdb.php");
                $sql = "SELECT * FROM books ORDER BY books.Type DESC";
                $result = $conn->query($sql);
                return $result;
        }
        function ascrate()
        {
                require("../model/connectdb.php");
                $sql = "SELECT * FROM books ORDER BY books.Ratings ASC";
                $result = $conn->query($sql);
                return $result;
        }
        function dscrate()
        {
                require("../model/connectdb.php");
                $sql = "SELECT * FROM books ORDER BY books.Ratings DESC";
                $result = $conn->query($sql);
                return $result;
        }
}
?>