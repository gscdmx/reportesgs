<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>"admin",
            'email'=>"admin@cdmx",
            'permisos'=>'a:8:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:5;s:1:"6";i:6;s:1:"7";i:7;s:1:"8";}',
            'password'=>bcrypt('admin'),
            'delegacion_user'=>""

        ]);


        DB::table('users')->insert([
            'name'=>"AOB-1",
            'email'=>"AOB-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('AOB-1'),
            'delegacion_user'=>"1"

        ]);


        DB::table('users')->insert([
            'name'=>"AOB-2",
            'email'=>"AOB-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('AOB-2'),
            'delegacion_user'=>"1"

        ]);


        DB::table('users')->insert([
            'name'=>"AOB-3",
            'email'=>"AOB-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('AOB-3'),
            'delegacion_user'=>"1"

        ]);

        DB::table('users')->insert([
            'name'=>"AOB-4",
            'email'=>"AOB-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('AOB-4'),
            'delegacion_user'=>"1"

        ]);

        
        DB::table('users')->insert([
            'name'=>"AZC-1",
            'email'=>"AZC-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('AZC-1'),
            'delegacion_user'=>"2"

        ]);


        DB::table('users')->insert([
            'name'=>"AZC-2",
            'email'=>"AZC-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('AZC-2'),
            'delegacion_user'=>"2"

        ]);


        DB::table('users')->insert([
            'name'=>"AZC-3",
            'email'=>"AZC-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('AZC-3'),
            'delegacion_user'=>"2"

        ]);

        DB::table('users')->insert([
            'name'=>"AZC-4",
            'email'=>"AZC-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('AZC-4'),
            'delegacion_user'=>"2"

        ]);


        DB::table('users')->insert([
            'name'=>"BJU-1",
            'email'=>"BJU-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('BJU-1'),
            'delegacion_user'=>"3"

        ]);


        DB::table('users')->insert([
            'name'=>"BJU-2",
            'email'=>"BJU-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('BJU-2'),
            'delegacion_user'=>"3"

        ]);


        DB::table('users')->insert([
            'name'=>"BJU-3",
            'email'=>"BJU-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('BJ-3'),
            'delegacion_user'=>"3"

        ]);

        DB::table('users')->insert([
            'name'=>"BJU-4",
            'email'=>"BJU-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('BJU-4'),
            'delegacion_user'=>"3"

        ]);

        DB::table('users')->insert([
            'name'=>"BJU-5",
            'email'=>"BJU-5",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('BJU-5'),
            'delegacion_user'=>"3"

        ]);

        DB::table('users')->insert([
            'name'=>"COY-1",
            'email'=>"COY-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('COY-1'),
            'delegacion_user'=>"4"

        ]);

        DB::table('users')->insert([
            'name'=>"COY-2",
            'email'=>"COY-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('COY-2'),
            'delegacion_user'=>"4"

        ]);

        DB::table('users')->insert([
            'name'=>"COY-3",
            'email'=>"COY-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('COY-3'),
            'delegacion_user'=>"4"

        ]);

        DB::table('users')->insert([
            'name'=>"COY-4",
            'email'=>"COY-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('COY-4'),
            'delegacion_user'=>"4"

        ]);

        DB::table('users')->insert([
            'name'=>"COY-5",
            'email'=>"COY-5",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('COY-5'),
            'delegacion_user'=>"4"

        ]);


        DB::table('users')->insert([
            'name'=>"CUJ-1",
            'email'=>"CUJ-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUJ-1'),
            'delegacion_user'=>"5"

        ]);

        DB::table('users')->insert([
            'name'=>"CUJ-2",
            'email'=>"CUJ-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUJ-2'),
            'delegacion_user'=>"5"

        ]);

        DB::table('users')->insert([
            'name'=>"CUH-1",
            'email'=>"CUH-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUH-1'),
            'delegacion_user'=>"6"

        ]);


        DB::table('users')->insert([
            'name'=>"CUH-2",
            'email'=>"CUH-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUH-2'),
            'delegacion_user'=>"6"

        ]);


        DB::table('users')->insert([
            'name'=>"CUH-3",
            'email'=>"CUH-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUH-3'),
            'delegacion_user'=>"6"

        ]);

        DB::table('users')->insert([
            'name'=>"CUH-4",
            'email'=>"CUH-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUH-4'),
            'delegacion_user'=>"6"

        ]);

        DB::table('users')->insert([
            'name'=>"CUH-5",
            'email'=>"CUH-5",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUH-5'),
            'delegacion_user'=>"6"

        ]);

        DB::table('users')->insert([
            'name'=>"CUH-6",
            'email'=>"CUH-6",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUH-6'),
            'delegacion_user'=>"6"

        ]);

        DB::table('users')->insert([
            'name'=>"CUH-7",
            'email'=>"CUH-7",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUH-7'),
            'delegacion_user'=>"6"

        ]);

        DB::table('users')->insert([
            'name'=>"CUH-8",
            'email'=>"CUH-8",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('CUH-8'),
            'delegacion_user'=>"6"

        ]);

        DB::table('users')->insert([
            'name'=>"GAM-1",
            'email'=>"GAM-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('GAM-1'),
            'delegacion_user'=>"7"

        ]);
       
        DB::table('users')->insert([
            'name'=>"GAM-2",
            'email'=>"GAM-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('GAM-2'),
            'delegacion_user'=>"7"

        ]);

        DB::table('users')->insert([
            'name'=>"GAM-3",
            'email'=>"GAM-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('GAM-3'),
            'delegacion_user'=>"7"

        ]);

        DB::table('users')->insert([
            'name'=>"GAM-4",
            'email'=>"GAM-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('GAM-4'),
            'delegacion_user'=>"7"

        ]);

        DB::table('users')->insert([
            'name'=>"GAM-5",
            'email'=>"GAM-5",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('GAM-5'),
            'delegacion_user'=>"7"

        ]);

        DB::table('users')->insert([
            'name'=>"GAM-6",
            'email'=>"GAM-6",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('GAM-6'),
            'delegacion_user'=>"7"

        ]);

        DB::table('users')->insert([
            'name'=>"GAM-7",
            'email'=>"GAM-7",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('GAM-7'),
            'delegacion_user'=>"7"

        ]);

        DB::table('users')->insert([
            'name'=>"GAM-8",
            'email'=>"GAM-8",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('GAM-8'),
            'delegacion_user'=>"7"

        ]);

        DB::table('users')->insert([
            'name'=>"IZC-1",
            'email'=>"IZC-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZC-1'),
            'delegacion_user'=>"8"

        ]);

        DB::table('users')->insert([
            'name'=>"IZC-2",
            'email'=>"IZC-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZC-2'),
            'delegacion_user'=>"8"

        ]);

        DB::table('users')->insert([
            'name'=>"IZC-3",
            'email'=>"IZC-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZC-3'),
            'delegacion_user'=>"8"

        ]);

        DB::table('users')->insert([
            'name'=>"IZP-1",
            'email'=>"IZP-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZP-1'),
            'delegacion_user'=>"9"

        ]);

        DB::table('users')->insert([
            'name'=>"IZP-2",
            'email'=>"IZP-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZP-2'),
            'delegacion_user'=>"9"

        ]);

        DB::table('users')->insert([
            'name'=>"IZP-4",
            'email'=>"IZP-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZP-4'),
            'delegacion_user'=>"9"

        ]);

        DB::table('users')->insert([
            'name'=>"IZP-5",
            'email'=>"IZP-5",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZP-5'),
            'delegacion_user'=>"9"

        ]);

        DB::table('users')->insert([
            'name'=>"IZP-6",
            'email'=>"IZP-6",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZP-6'),
            'delegacion_user'=>"9"

        ]);

        DB::table('users')->insert([
            'name'=>"IZP-7",
            'email'=>"IZP-7",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZP-7'),
            'delegacion_user'=>"9"

        ]);

        DB::table('users')->insert([
            'name'=>"IZP-8",
            'email'=>"IZP-8",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZP-8'),
            'delegacion_user'=>"9"

        ]);

        DB::table('users')->insert([
            'name'=>"IZP-9",
            'email'=>"IZP-9",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZP-9'),
            'delegacion_user'=>"9"

        ]);

        DB::table('users')->insert([
            'name'=>"IZP-10",
            'email'=>"IZP-10",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('IZP-10'),
            'delegacion_user'=>"9"

        ]);


        DB::table('users')->insert([
            'name'=>"MCA-1",
            'email'=>"MCA-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('MAC-1'),
            'delegacion_user'=>"10"

        ]);


        DB::table('users')->insert([
            'name'=>"MCA-2",
            'email'=>"MCA-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('MAC-2'),
            'delegacion_user'=>"10"

        ]);


        DB::table('users')->insert([
            'name'=>"MIH-1",
            'email'=>"MIH-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('MIH-1'),
            'delegacion_user'=>"11"

        ]);

        DB::table('users')->insert([
            'name'=>"MIH-2",
            'email'=>"MIH-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('MIH-2'),
            'delegacion_user'=>"11"

        ]);

        DB::table('users')->insert([
            'name'=>"MIH-3",
            'email'=>"MIH-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('MIH-3'),
            'delegacion_user'=>"11"

        ]);

        DB::table('users')->insert([
            'name'=>"MIH-4",
            'email'=>"MIH-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('MIH-4'),
            'delegacion_user'=>"11"

        ]);

        DB::table('users')->insert([
            'name'=>"MIH-5",
            'email'=>"MIH-5",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('MIH-5'),
            'delegacion_user'=>"11"

        ]);


        DB::table('users')->insert([
            'name'=>"MIL-1",
            'email'=>"MIL-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('MIL-1'),
            'delegacion_user'=>"12"

        ]);


        DB::table('users')->insert([
            'name'=>"MIL-2",
            'email'=>"MIL-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('MIL-2'),
            'delegacion_user'=>"12"

        ]);

        DB::table('users')->insert([
            'name'=>"TLH-1",
            'email'=>"TLH-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('TLH-1'),
            'delegacion_user'=>"13"

        ]);

        DB::table('users')->insert([
            'name'=>"TLH-2",
            'email'=>"TLH-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('TLH-2'),
            'delegacion_user'=>"13"

        ]);


        DB::table('users')->insert([
            'name'=>"TLP-1",
            'email'=>"TLP-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('TLP-1'),
            'delegacion_user'=>"14"

        ]);

        DB::table('users')->insert([
            'name'=>"TLP-2",
            'email'=>"TLP-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('TLP-2'),
            'delegacion_user'=>"14"

        ]);

        DB::table('users')->insert([
            'name'=>"TLP-3",
            'email'=>"TLP-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('TLP-3'),
            'delegacion_user'=>"14"

        ]);

        DB::table('users')->insert([
            'name'=>"TLP-4",
            'email'=>"TLP-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('TLP-4'),
            'delegacion_user'=>"14"

        ]);
       

       DB::table('users')->insert([
            'name'=>"VCA-1",
            'email'=>"VCA-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('VCA-1'),
            'delegacion_user'=>"15"

        ]);

       DB::table('users')->insert([
            'name'=>"VCA-2",
            'email'=>"VCA-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('VCA-2'),
            'delegacion_user'=>"15"

        ]);


       DB::table('users')->insert([
            'name'=>"VCA-3",
            'email'=>"VCA-3",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('VCA-3'),
            'delegacion_user'=>"15"

        ]);

       DB::table('users')->insert([
            'name'=>"VCA-4",
            'email'=>"VCA-4",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('VCA-4'),
            'delegacion_user'=>"15"

        ]);

       DB::table('users')->insert([
            'name'=>"VCA-5",
            'email'=>"VCA-5",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('VCA-5'),
            'delegacion_user'=>"15"

        ]);


       DB::table('users')->insert([
            'name'=>"XOC-1",
            'email'=>"XOC-1",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('XOC-1'),
            'delegacion_user'=>"16"

        ]);

        DB::table('users')->insert([
            'name'=>"XOC-2",
            'email'=>"XOC-2",
            'permisos'=>'a:5:{i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:7;s:1:"8";}',
            'password'=>bcrypt('XOC-2'),
            'delegacion_user'=>"16"

        ]);


        DB::table('users')->insert([
            'name'=>"ALVARO-OBREGON",
            'email'=>"ALVARO-OBREGON",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('ALVARO-OBREGÓN'),
            'delegacion_user'=>"1"

        ]);

        
        DB::table('users')->insert([
            'name'=>"AZCAPOTZALCO",
            'email'=>"AZCAPOTZALCO",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('AZCAPOTZALCO'),
            'delegacion_user'=>"2"

        ]);
        
         DB::table('users')->insert([
            'name'=>"BENITO-JUAREZ",
            'email'=>"BENITO-JUAREZ",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('BENITO-JUAREZ'),
            'delegacion_user'=>"3"

        ]);

          DB::table('users')->insert([
            'name'=>"COYOACAN",
            'email'=>"COYOACAN",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('COYOACAN'),
            'delegacion_user'=>"4"

        ]);

           DB::table('users')->insert([
            'name'=>"CUAJIMALPA",
            'email'=>"CUAJIMALPA",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('CUAJIMALPA'),
            'delegacion_user'=>"5"

        ]);


            DB::table('users')->insert([
            'name'=>"CUAUHTEMOC",
            'email'=>"CUAUHTEMOC",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('CUAUHTEMOC'),
            'delegacion_user'=>"6"

        ]);


             DB::table('users')->insert([
            'name'=>"GUSTAVO-A-MADERO",
            'email'=>"GUSTAVO-A-MADERO",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('GUSTAVO-A-MADERO'),
            'delegacion_user'=>"7"

        ]);



              DB::table('users')->insert([
            'name'=>"IZTACALCO",
            'email'=>"IZTACALCO",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('IZTACALCO'),
            'delegacion_user'=>"8"

        ]);



               DB::table('users')->insert([
            'name'=>"IZTAPALAPA",
            'email'=>"IZTAPALAPA",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('IZTAPALAPA'),
            'delegacion_user'=>"9"

        ]);



                DB::table('users')->insert([
            'name'=>"MAGDALENA-CONTRERAS",
            'email'=>"MAGDALENA-CONTRERAS",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('MAGDALENA-CONTRERAS'),
            'delegacion_user'=>"10"

        ]);



                 DB::table('users')->insert([
            'name'=>"MIGUEL-HIDALGO",
            'email'=>"MIGUEL-HIDALGO",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('MIGUEL-HIDALGO'),
            'delegacion_user'=>"11"

        ]);



                  DB::table('users')->insert([
            'name'=>"MILPA-ALTA",
            'email'=>"MILPA-ALTA",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('MILPA-ALTA'),
            'delegacion_user'=>"12"

        ]);


         DB::table('users')->insert([
            'name'=>"TLAHUAC",
            'email'=>"TLAHUAC",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('TLAHUAC'),
            'delegacion_user'=>"13"

        ]);

          DB::table('users')->insert([
            'name'=>"TLALPAN",
            'email'=>"TLALPAN",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('TLALPAN'),
            'delegacion_user'=>"14"

        ]);


           DB::table('users')->insert([
            'name'=>"VENUSTIANO-CARRANZA",
            'email'=>"VENUSTIANO-CARRANZA",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('VENUSTIANO-CARRANZA'),
            'delegacion_user'=>"15"

        ]);


            DB::table('users')->insert([
            'name'=>"XOCHIMILCO",
            'email'=>"XOCHIMILCO",
            'permisos'=>'a:2:{i:5;s:1:"6";i:7;s:1:"8";}',
            'password'=>bcrypt('XOCHIMILCO'),
            'delegacion_user'=>"16"

        ]);


            DB::table('users')->insert([
            'name'=>"Luz R Lara",
            'email'=>"Luz",
            'permisos'=>'a:8:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:5;s:1:"6";i:6;s:1:"7";i:7;s:1:"8";}',
            'password'=>bcrypt('Biendificil2016'),
            'delegacion_user'=>""

        ]);

            DB::table('users')->insert([
            'name'=>"Itzel Ortíz",
            'email'=>"itz3l.ortiz2020",
            'permisos'=>'a:2:{i:6;s:1:"7";i:7;s:1:"8";}',
            'password'=>bcrypt('iTz3l2020cdmx'),
            'delegacion_user'=>""

        ]);

           DB::table('users')->insert([
            'name'=>"Lic. Bertha",
            'email'=>"B3rTh4.2020",
            'permisos'=>'a:2:{i:6;s:1:"7";i:7;s:1:"8";}',
            'password'=>bcrypt('B3rTh4cdmx2020.70'),
            'delegacion_user'=>""

        ]);

    }
}














