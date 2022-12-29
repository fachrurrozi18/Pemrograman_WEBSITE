<?php
        include "conn.php";
        function tambah($data){
            global $conn;

            $nama = $_POST["name"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $gender = $_POST["gender"];
            $position = $_POST["position"];
            $status = $_POST["status"];

            if($conn->connect_error){
                die('Gagal Konek : '.$conn->connect_error);
            }else{
                $data = $conn->prepare("Insert into karyawan (nama, email, address, gender, position, status)
                                        Values(?,?,?,?,?,?)");
                $data->bind_param("ssssss", $nama, $email, $address, $gender, $position, $status);
                if(! $data->execute()){
                    echo "
                        <script>
                            alert('data gagal ditambahkan!');
                            document.location.href = 'index.php';
                        </script>
                    ";
                    include 'index.php';
                }else{
                    echo "
                        <script>
                            alert('data berhasil ditambahkan!');
                            document.location.href = 'index.php';
                        </script>
                    ";
                }
                $data->close();
                $conn->close();
            }

            return mysqli_affected_rows($conn);
        }

        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
            return mysqli_affected_rows($conn);
        }

        // function update(){
        //     global $conn;
        //     mysqli_query($conn, "UPDATE FROM karyawan SET nama = $_POST[nama], email=$_POST[email],address=$_POST[address] 
        //             , gender=$_POST[gender], position=$_POST[position], status=$_POST[status] WHERE id = $_GET[id]");
        //     return mysqli_affected_rows($conn);
        // }
?>