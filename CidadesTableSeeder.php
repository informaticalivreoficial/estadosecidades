<?php

use Illuminate\Database\Seeder;

class CidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cidades')->insert([
            ['cidade_id' => 1, 'estado_id' => 9, 'cidade_nome' => 'Abadia de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 2, 'estado_id' => 13, 'cidade_nome' => 'Abadia dos Dourados', 'cidade_uf' => 'MG'],
            ['cidade_id' => 3, 'estado_id' => 9, 'cidade_nome' => 'Abadiânia', 'cidade_uf' => 'GO'],
            ['cidade_id' => 4, 'estado_id' => 13, 'cidade_nome' => 'Abaeté', 'cidade_uf' => 'MG'],
            ['cidade_id' => 5, 'estado_id' => 14, 'cidade_nome' => 'Abaetetuba', 'cidade_uf' => 'PA'],
            ['cidade_id' => 6, 'estado_id' => 6, 'cidade_nome' => 'Abaiara', 'cidade_uf' => 'CE'],
            ['cidade_id' => 7, 'estado_id' => 5, 'cidade_nome' => 'Abaíra', 'cidade_uf' => 'BA'],
            ['cidade_id' => 8, 'estado_id' => 5, 'cidade_nome' => 'Abaré', 'cidade_uf' => 'BA'],
            ['cidade_id' => 9, 'estado_id' => 16, 'cidade_nome' => 'Abatiá', 'cidade_uf' => 'PR'],
            ['cidade_id' => 10, 'estado_id' => 24, 'cidade_nome' => 'Abdon Batista', 'cidade_uf' => 'SC'],
            ['cidade_id' => 11, 'estado_id' => 14, 'cidade_nome' => 'Abel Figueiredo', 'cidade_uf' => 'PA'],
            ['cidade_id' => 12, 'estado_id' => 24, 'cidade_nome' => 'Abelardo Luz', 'cidade_uf' => 'SC'],
            ['cidade_id' => 13, 'estado_id' => 13, 'cidade_nome' => 'Abre Campo', 'cidade_uf' => 'MG'],
            ['cidade_id' => 14, 'estado_id' => 17, 'cidade_nome' => 'Abreu e Lima', 'cidade_uf' => 'PE'],
            ['cidade_id' => 15, 'estado_id' => 27, 'cidade_nome' => 'Abreulândia', 'cidade_uf' => 'TO'],
            ['cidade_id' => 16, 'estado_id' => 13, 'cidade_nome' => 'Acaiaca', 'cidade_uf' => 'MG'],
            ['cidade_id' => 17, 'estado_id' => 10, 'cidade_nome' => 'Açailândia', 'cidade_uf' => 'MA'],
            ['cidade_id' => 18, 'estado_id' => 5, 'cidade_nome' => 'Acajutiba', 'cidade_uf' => 'BA'],
            ['cidade_id' => 19, 'estado_id' => 14, 'cidade_nome' => 'Acará', 'cidade_uf' => 'PA'],
            ['cidade_id' => 20, 'estado_id' => 6, 'cidade_nome' => 'Acarape', 'cidade_uf' => 'CE'],
            ['cidade_id' => 21, 'estado_id' => 6, 'cidade_nome' => 'Acaraú', 'cidade_uf' => 'CE'],
            ['cidade_id' => 22, 'estado_id' => 20, 'cidade_nome' => 'Acari', 'cidade_uf' => 'RN'],
            ['cidade_id' => 23, 'estado_id' => 18, 'cidade_nome' => 'Acauã', 'cidade_uf' => 'PI'],
            ['cidade_id' => 24, 'estado_id' => 21, 'cidade_nome' => 'Aceguá', 'cidade_uf' => 'RS'],
            ['cidade_id' => 25, 'estado_id' => 6, 'cidade_nome' => 'Acopiara', 'cidade_uf' => 'CE'],
            ['cidade_id' => 26, 'estado_id' => 11, 'cidade_nome' => 'Acorizal', 'cidade_uf' => 'MT'],
            ['cidade_id' => 27, 'estado_id' => 1, 'cidade_nome' => 'Acrelândia', 'cidade_uf' => 'AC'],
            ['cidade_id' => 28, 'estado_id' => 9, 'cidade_nome' => 'Acreúna', 'cidade_uf' => 'GO'],
            ['cidade_id' => 29, 'estado_id' => 20, 'cidade_nome' => 'Açu', 'cidade_uf' => 'RN'],
            ['cidade_id' => 30, 'estado_id' => 13, 'cidade_nome' => 'Açucena', 'cidade_uf' => 'MG'],
            ['cidade_id' => 31, 'estado_id' => 25, 'cidade_nome' => 'Adamantina', 'cidade_uf' => 'SP'],
            ['cidade_id' => 32, 'estado_id' => 9, 'cidade_nome' => 'Adelândia', 'cidade_uf' => 'GO'],
            ['cidade_id' => 33, 'estado_id' => 25, 'cidade_nome' => 'Adolfo', 'cidade_uf' => 'SP'],
            ['cidade_id' => 34, 'estado_id' => 16, 'cidade_nome' => 'Adrianópolis', 'cidade_uf' => 'PR'],
            ['cidade_id' => 35, 'estado_id' => 5, 'cidade_nome' => 'Adustina', 'cidade_uf' => 'BA'],
            ['cidade_id' => 36, 'estado_id' => 17, 'cidade_nome' => 'Afogados da Ingazeira', 'cidade_uf' => 'PE'],
            ['cidade_id' => 37, 'estado_id' => 20, 'cidade_nome' => 'Afonso Bezerra', 'cidade_uf' => 'RN'],
            ['cidade_id' => 38, 'estado_id' => 8, 'cidade_nome' => 'Afonso Cláudio', 'cidade_uf' => 'ES'],
            ['cidade_id' => 39, 'estado_id' => 10, 'cidade_nome' => 'Afonso Cunha', 'cidade_uf' => 'MA'],
            ['cidade_id' => 40, 'estado_id' => 17, 'cidade_nome' => 'Afrânio', 'cidade_uf' => 'PE'],
            ['cidade_id' => 41, 'estado_id' => 14, 'cidade_nome' => 'Afuá', 'cidade_uf' => 'PA'],
            ['cidade_id' => 42, 'estado_id' => 17, 'cidade_nome' => 'Agrestina', 'cidade_uf' => 'PE'],
            ['cidade_id' => 43, 'estado_id' => 18, 'cidade_nome' => 'Agricolândia', 'cidade_uf' => 'PI'],
            ['cidade_id' => 44, 'estado_id' => 24, 'cidade_nome' => 'Agrolândia', 'cidade_uf' => 'SC'],
            ['cidade_id' => 45, 'estado_id' => 24, 'cidade_nome' => 'Agronômica', 'cidade_uf' => 'SC'],
            ['cidade_id' => 46, 'estado_id' => 14, 'cidade_nome' => 'Água Azul do Norte', 'cidade_uf' => 'PA'],
            ['cidade_id' => 47, 'estado_id' => 13, 'cidade_nome' => 'Água Boa', 'cidade_uf' => 'MG'],
            ['cidade_id' => 48, 'estado_id' => 11, 'cidade_nome' => 'Água Boa', 'cidade_uf' => 'MT'],
            ['cidade_id' => 49, 'estado_id' => 2, 'cidade_nome' => 'Água Branca', 'cidade_uf' => 'AL'],
            ['cidade_id' => 50, 'estado_id' => 15, 'cidade_nome' => 'Água Branca', 'cidade_uf' => 'PB'],
            ['cidade_id' => 51, 'estado_id' => 18, 'cidade_nome' => 'Água Branca', 'cidade_uf' => 'PI'],
            ['cidade_id' => 52, 'estado_id' => 12, 'cidade_nome' => 'Água Clara', 'cidade_uf' => 'MS'],
            ['cidade_id' => 53, 'estado_id' => 13, 'cidade_nome' => 'Água Comprida', 'cidade_uf' => 'MG'],
            ['cidade_id' => 54, 'estado_id' => 24, 'cidade_nome' => 'Água Doce', 'cidade_uf' => 'SC'],
            ['cidade_id' => 55, 'estado_id' => 10, 'cidade_nome' => 'Água Doce do Maranhão', 'cidade_uf' => 'MA'],
            ['cidade_id' => 56, 'estado_id' => 8, 'cidade_nome' => 'Água Doce do Norte', 'cidade_uf' => 'ES'],
            ['cidade_id' => 57, 'estado_id' => 5, 'cidade_nome' => 'Água Fria', 'cidade_uf' => 'BA'],
            ['cidade_id' => 58, 'estado_id' => 9, 'cidade_nome' => 'Água Fria de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 59, 'estado_id' => 9, 'cidade_nome' => 'Água Limpa', 'cidade_uf' => 'GO'],
            ['cidade_id' => 60, 'estado_id' => 20, 'cidade_nome' => 'Água Nova', 'cidade_uf' => 'RN'],
            ['cidade_id' => 61, 'estado_id' => 17, 'cidade_nome' => 'Água Preta', 'cidade_uf' => 'PE'],
            ['cidade_id' => 62, 'estado_id' => 21, 'cidade_nome' => 'Água Santa', 'cidade_uf' => 'RS'],
            ['cidade_id' => 63, 'estado_id' => 25, 'cidade_nome' => 'Aguaí', 'cidade_uf' => 'SP'],
            ['cidade_id' => 64, 'estado_id' => 13, 'cidade_nome' => 'Aguanil', 'cidade_uf' => 'MG'],
            ['cidade_id' => 65, 'estado_id' => 17, 'cidade_nome' => 'Águas Belas', 'cidade_uf' => 'PE'],
            ['cidade_id' => 66, 'estado_id' => 25, 'cidade_nome' => 'Águas da Prata', 'cidade_uf' => 'SP'],
            ['cidade_id' => 67, 'estado_id' => 24, 'cidade_nome' => 'Águas de Chapecó', 'cidade_uf' => 'SC'],
            ['cidade_id' => 68, 'estado_id' => 25, 'cidade_nome' => 'Águas de Lindóia', 'cidade_uf' => 'SP'],
            ['cidade_id' => 69, 'estado_id' => 25, 'cidade_nome' => 'Águas de Santa Bárbara', 'cidade_uf' => 'SP'],
            ['cidade_id' => 70, 'estado_id' => 25, 'cidade_nome' => 'Águas de São Pedro', 'cidade_uf' => 'SP'],
            ['cidade_id' => 71, 'estado_id' => 13, 'cidade_nome' => 'Águas Formosas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 73, 'estado_id' => 9, 'cidade_nome' => 'Águas Lindas de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 74, 'estado_id' => 24, 'cidade_nome' => 'Águas Mornas', 'cidade_uf' => 'SC'],
            ['cidade_id' => 75, 'estado_id' => 13, 'cidade_nome' => 'Águas Vermelhas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 76, 'estado_id' => 21, 'cidade_nome' => 'Agudo', 'cidade_uf' => 'RS'],
            ['cidade_id' => 77, 'estado_id' => 25, 'cidade_nome' => 'Agudos', 'cidade_uf' => 'SP'],
            ['cidade_id' => 78, 'estado_id' => 16, 'cidade_nome' => 'Agudos do Sul', 'cidade_uf' => 'PR'],
            ['cidade_id' => 79, 'estado_id' => 8, 'cidade_nome' => 'Águia Branca', 'cidade_uf' => 'ES'],
            ['cidade_id' => 80, 'estado_id' => 15, 'cidade_nome' => 'Aguiar', 'cidade_uf' => 'PB'],
            ['cidade_id' => 81, 'estado_id' => 27, 'cidade_nome' => 'Aguiarnópolis', 'cidade_uf' => 'TO'],
            ['cidade_id' => 82, 'estado_id' => 13, 'cidade_nome' => 'Aimorés', 'cidade_uf' => 'MG'],
            ['cidade_id' => 83, 'estado_id' => 5, 'cidade_nome' => 'Aiquara', 'cidade_uf' => 'BA'],
            ['cidade_id' => 84, 'estado_id' => 6, 'cidade_nome' => 'Aiuaba', 'cidade_uf' => 'CE'],
            ['cidade_id' => 85, 'estado_id' => 13, 'cidade_nome' => 'Aiuruoca', 'cidade_uf' => 'MG'],
            ['cidade_id' => 86, 'estado_id' => 21, 'cidade_nome' => 'Ajuricaba', 'cidade_uf' => 'RS'],
            ['cidade_id' => 87, 'estado_id' => 13, 'cidade_nome' => 'Alagoa', 'cidade_uf' => 'MG'],
            ['cidade_id' => 88, 'estado_id' => 15, 'cidade_nome' => 'Alagoa Grande', 'cidade_uf' => 'PB'],
            ['cidade_id' => 89, 'estado_id' => 15, 'cidade_nome' => 'Alagoa Nova', 'cidade_uf' => 'PB'],
            ['cidade_id' => 90, 'estado_id' => 15, 'cidade_nome' => 'Alagoinha', 'cidade_uf' => 'PB'],
            ['cidade_id' => 91, 'estado_id' => 17, 'cidade_nome' => 'Alagoinha', 'cidade_uf' => 'PE'],
            ['cidade_id' => 92, 'estado_id' => 18, 'cidade_nome' => 'Alagoinha do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 93, 'estado_id' => 5, 'cidade_nome' => 'Alagoinhas', 'cidade_uf' => 'BA'],
            ['cidade_id' => 94, 'estado_id' => 25, 'cidade_nome' => 'Alambari', 'cidade_uf' => 'SP'],
            ['cidade_id' => 95, 'estado_id' => 13, 'cidade_nome' => 'Albertina', 'cidade_uf' => 'MG'],
            ['cidade_id' => 96, 'estado_id' => 10, 'cidade_nome' => 'Alcântara', 'cidade_uf' => 'MA'],
            ['cidade_id' => 97, 'estado_id' => 6, 'cidade_nome' => 'Alcântaras', 'cidade_uf' => 'CE'],
            ['cidade_id' => 98, 'estado_id' => 15, 'cidade_nome' => 'Alcantil', 'cidade_uf' => 'PB'],
            ['cidade_id' => 99, 'estado_id' => 12, 'cidade_nome' => 'Alcinópolis', 'cidade_uf' => 'MS'],
            ['cidade_id' => 100, 'estado_id' => 5, 'cidade_nome' => 'Alcobaça', 'cidade_uf' => 'BA'],
            ['cidade_id' => 101, 'estado_id' => 10, 'cidade_nome' => 'Aldeias Altas', 'cidade_uf' => 'MA'],
            ['cidade_id' => 102, 'estado_id' => 21, 'cidade_nome' => 'Alecrim', 'cidade_uf' => 'RS'],
            ['cidade_id' => 103, 'estado_id' => 8, 'cidade_nome' => 'Alegre', 'cidade_uf' => 'ES'],
            ['cidade_id' => 104, 'estado_id' => 21, 'cidade_nome' => 'Alegrete', 'cidade_uf' => 'RS'],
            ['cidade_id' => 105, 'estado_id' => 18, 'cidade_nome' => 'Alegrete do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 106, 'estado_id' => 21, 'cidade_nome' => 'Alegria', 'cidade_uf' => 'RS'],
            ['cidade_id' => 107, 'estado_id' => 13, 'cidade_nome' => 'Além Paraíba', 'cidade_uf' => 'MG'],
            ['cidade_id' => 108, 'estado_id' => 14, 'cidade_nome' => 'Alenquer', 'cidade_uf' => 'PA'],
            ['cidade_id' => 109, 'estado_id' => 20, 'cidade_nome' => 'Alexandria', 'cidade_uf' => 'RN'],
            ['cidade_id' => 110, 'estado_id' => 9, 'cidade_nome' => 'Alexânia', 'cidade_uf' => 'GO'],
            ['cidade_id' => 111, 'estado_id' => 13, 'cidade_nome' => 'Alfenas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 112, 'estado_id' => 8, 'cidade_nome' => 'Alfredo Chaves', 'cidade_uf' => 'ES'],
            ['cidade_id' => 113, 'estado_id' => 25, 'cidade_nome' => 'Alfredo Marcondes', 'cidade_uf' => 'SP'],
            ['cidade_id' => 114, 'estado_id' => 13, 'cidade_nome' => 'Alfredo Vasconcelos', 'cidade_uf' => 'MG'],
            ['cidade_id' => 115, 'estado_id' => 24, 'cidade_nome' => 'Alfredo Wagner', 'cidade_uf' => 'SC'],
            ['cidade_id' => 116, 'estado_id' => 15, 'cidade_nome' => 'Algodão de Jandaíra', 'cidade_uf' => 'PB'],
            ['cidade_id' => 117, 'estado_id' => 15, 'cidade_nome' => 'Alhandra', 'cidade_uf' => 'PB'],
            ['cidade_id' => 118, 'estado_id' => 17, 'cidade_nome' => 'Aliança', 'cidade_uf' => 'PE'],
            ['cidade_id' => 119, 'estado_id' => 27, 'cidade_nome' => 'Aliança do Tocantins', 'cidade_uf' => 'TO'],
            ['cidade_id' => 120, 'estado_id' => 5, 'cidade_nome' => 'Almadina', 'cidade_uf' => 'BA'],
            ['cidade_id' => 121, 'estado_id' => 27, 'cidade_nome' => 'Almas', 'cidade_uf' => 'TO'],
            ['cidade_id' => 122, 'estado_id' => 14, 'cidade_nome' => 'Almeirim', 'cidade_uf' => 'PA'],
            ['cidade_id' => 123, 'estado_id' => 13, 'cidade_nome' => 'Almenara', 'cidade_uf' => 'MG'],
            ['cidade_id' => 124, 'estado_id' => 20, 'cidade_nome' => 'Almino Afonso', 'cidade_uf' => 'RN'],
            ['cidade_id' => 125, 'estado_id' => 16, 'cidade_nome' => 'Almirante Tamandaré', 'cidade_uf' => 'PR'],
            ['cidade_id' => 126, 'estado_id' => 21, 'cidade_nome' => 'Almirante Tamandaré do Sul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 127, 'estado_id' => 9, 'cidade_nome' => 'Aloândia', 'cidade_uf' => 'GO'],
            ['cidade_id' => 128, 'estado_id' => 13, 'cidade_nome' => 'Alpercata', 'cidade_uf' => 'MG'],
            ['cidade_id' => 129, 'estado_id' => 21, 'cidade_nome' => 'Alpestre', 'cidade_uf' => 'RS'],
            ['cidade_id' => 130, 'estado_id' => 13, 'cidade_nome' => 'Alpinópolis', 'cidade_uf' => 'MG'],
            ['cidade_id' => 131, 'estado_id' => 11, 'cidade_nome' => 'Alta Floresta', 'cidade_uf' => 'MT'],
            ['cidade_id' => 132, 'estado_id' => 22, 'cidade_nome' => 'Alta Floresta D\'Oeste', 'cidade_uf' => 'RO'],
            ['cidade_id' => 133, 'estado_id' => 25, 'cidade_nome' => 'Altair', 'cidade_uf' => 'SP'],
            ['cidade_id' => 134, 'estado_id' => 14, 'cidade_nome' => 'Altamira', 'cidade_uf' => 'PA'],
            ['cidade_id' => 135, 'estado_id' => 10, 'cidade_nome' => 'Altamira do Maranhão', 'cidade_uf' => 'MA'],
            ['cidade_id' => 136, 'estado_id' => 16, 'cidade_nome' => 'Altamira do Paraná', 'cidade_uf' => 'PR'],
            ['cidade_id' => 137, 'estado_id' => 6, 'cidade_nome' => 'Altaneira', 'cidade_uf' => 'CE'],
            ['cidade_id' => 138, 'estado_id' => 13, 'cidade_nome' => 'Alterosa', 'cidade_uf' => 'MG'],
            ['cidade_id' => 139, 'estado_id' => 17, 'cidade_nome' => 'Altinho', 'cidade_uf' => 'PE'],
            ['cidade_id' => 140, 'estado_id' => 25, 'cidade_nome' => 'Altinópolis', 'cidade_uf' => 'SP'],
            ['cidade_id' => 141, 'estado_id' => 23, 'cidade_nome' => 'Alto Alegre', 'cidade_uf' => 'RR'],
            ['cidade_id' => 142, 'estado_id' => 21, 'cidade_nome' => 'Alto Alegre', 'cidade_uf' => 'RS'],
            ['cidade_id' => 143, 'estado_id' => 25, 'cidade_nome' => 'Alto Alegre', 'cidade_uf' => 'SP'],
            ['cidade_id' => 144, 'estado_id' => 10, 'cidade_nome' => 'Alto Alegre do Maranhão', 'cidade_uf' => 'MA'],
            ['cidade_id' => 145, 'estado_id' => 10, 'cidade_nome' => 'Alto Alegre do Pindaré', 'cidade_uf' => 'MA'],
            ['cidade_id' => 146, 'estado_id' => 22, 'cidade_nome' => 'Alto Alegre dos Parecis', 'cidade_uf' => 'RO'],
            ['cidade_id' => 147, 'estado_id' => 11, 'cidade_nome' => 'Alto Araguaia', 'cidade_uf' => 'MT'],
            ['cidade_id' => 148, 'estado_id' => 24, 'cidade_nome' => 'Alto Bela Vista', 'cidade_uf' => 'SC'],
            ['cidade_id' => 149, 'estado_id' => 11, 'cidade_nome' => 'Alto Boa Vista', 'cidade_uf' => 'MT'],
            ['cidade_id' => 150, 'estado_id' => 13, 'cidade_nome' => 'Alto Caparaó', 'cidade_uf' => 'MG'],
            ['cidade_id' => 151, 'estado_id' => 20, 'cidade_nome' => 'Alto do Rodrigues', 'cidade_uf' => 'RN'],
            ['cidade_id' => 152, 'estado_id' => 21, 'cidade_nome' => 'Alto Feliz', 'cidade_uf' => 'RS'],
            ['cidade_id' => 153, 'estado_id' => 11, 'cidade_nome' => 'Alto Garças', 'cidade_uf' => 'MT'],
            ['cidade_id' => 154, 'estado_id' => 9, 'cidade_nome' => 'Alto Horizonte', 'cidade_uf' => 'GO'],
            ['cidade_id' => 155, 'estado_id' => 13, 'cidade_nome' => 'Alto Jequitibá', 'cidade_uf' => 'MG'],
            ['cidade_id' => 156, 'estado_id' => 18, 'cidade_nome' => 'Alto Longá', 'cidade_uf' => 'PI'],
            ['cidade_id' => 157, 'estado_id' => 11, 'cidade_nome' => 'Alto Paraguai', 'cidade_uf' => 'MT'],
            ['cidade_id' => 158, 'estado_id' => 16, 'cidade_nome' => 'Alto Paraíso', 'cidade_uf' => 'PR'],
            ['cidade_id' => 159, 'estado_id' => 22, 'cidade_nome' => 'Alto Paraíso', 'cidade_uf' => 'RO'],
            ['cidade_id' => 160, 'estado_id' => 9, 'cidade_nome' => 'Alto Paraíso de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 161, 'estado_id' => 16, 'cidade_nome' => 'Alto Paraná', 'cidade_uf' => 'PR'],
            ['cidade_id' => 162, 'estado_id' => 10, 'cidade_nome' => 'Alto Parnaíba', 'cidade_uf' => 'MA'],
            ['cidade_id' => 163, 'estado_id' => 16, 'cidade_nome' => 'Alto Piquiri', 'cidade_uf' => 'PR'],
            ['cidade_id' => 164, 'estado_id' => 13, 'cidade_nome' => 'Alto Rio Doce', 'cidade_uf' => 'MG'],
            ['cidade_id' => 165, 'estado_id' => 8, 'cidade_nome' => 'Alto Rio Novo', 'cidade_uf' => 'ES'],
            ['cidade_id' => 166, 'estado_id' => 6, 'cidade_nome' => 'Alto Santo', 'cidade_uf' => 'CE'],
            ['cidade_id' => 167, 'estado_id' => 11, 'cidade_nome' => 'Alto Taquari', 'cidade_uf' => 'MT'],
            ['cidade_id' => 168, 'estado_id' => 16, 'cidade_nome' => 'Altônia', 'cidade_uf' => 'PR'],
            ['cidade_id' => 169, 'estado_id' => 18, 'cidade_nome' => 'Altos', 'cidade_uf' => 'PI'],
            ['cidade_id' => 170, 'estado_id' => 25, 'cidade_nome' => 'Alumínio', 'cidade_uf' => 'SP'],
            ['cidade_id' => 171, 'estado_id' => 4, 'cidade_nome' => 'Alvarães', 'cidade_uf' => 'AM'],
            ['cidade_id' => 172, 'estado_id' => 13, 'cidade_nome' => 'Alvarenga', 'cidade_uf' => 'MG'],
            ['cidade_id' => 173, 'estado_id' => 25, 'cidade_nome' => 'Álvares Florence', 'cidade_uf' => 'SP'],
            ['cidade_id' => 174, 'estado_id' => 25, 'cidade_nome' => 'Álvares Machado', 'cidade_uf' => 'SP'],
            ['cidade_id' => 175, 'estado_id' => 25, 'cidade_nome' => 'Álvaro de Carvalho', 'cidade_uf' => 'SP'],
            ['cidade_id' => 176, 'estado_id' => 25, 'cidade_nome' => 'Alvinlândia', 'cidade_uf' => 'SP'],
            ['cidade_id' => 177, 'estado_id' => 13, 'cidade_nome' => 'Alvinópolis', 'cidade_uf' => 'MG'],
            ['cidade_id' => 178, 'estado_id' => 21, 'cidade_nome' => 'Alvorada', 'cidade_uf' => 'RS'],
            ['cidade_id' => 179, 'estado_id' => 27, 'cidade_nome' => 'Alvorada', 'cidade_uf' => 'TO'],
            ['cidade_id' => 180, 'estado_id' => 13, 'cidade_nome' => 'Alvorada de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 181, 'estado_id' => 18, 'cidade_nome' => 'Alvorada do Gurguéia', 'cidade_uf' => 'PI'],
            ['cidade_id' => 182, 'estado_id' => 9, 'cidade_nome' => 'Alvorada do Norte', 'cidade_uf' => 'GO'],
            ['cidade_id' => 183, 'estado_id' => 16, 'cidade_nome' => 'Alvorada do Sul', 'cidade_uf' => 'PR'],
            ['cidade_id' => 184, 'estado_id' => 22, 'cidade_nome' => 'Alvorada D\'Oeste', 'cidade_uf' => 'RO'],
            ['cidade_id' => 185, 'estado_id' => 23, 'cidade_nome' => 'Amajari', 'cidade_uf' => 'RR'],
            ['cidade_id' => 186, 'estado_id' => 12, 'cidade_nome' => 'Amambai', 'cidade_uf' => 'MS'],
            ['cidade_id' => 187, 'estado_id' => 3, 'cidade_nome' => 'Amapá', 'cidade_uf' => 'AP'],
            ['cidade_id' => 188, 'estado_id' => 10, 'cidade_nome' => 'Amapá do Maranhão', 'cidade_uf' => 'MA'],
            ['cidade_id' => 189, 'estado_id' => 16, 'cidade_nome' => 'Amaporã', 'cidade_uf' => 'PR'],
            ['cidade_id' => 190, 'estado_id' => 17, 'cidade_nome' => 'Amaraji', 'cidade_uf' => 'PE'],
            ['cidade_id' => 191, 'estado_id' => 21, 'cidade_nome' => 'Amaral Ferrador', 'cidade_uf' => 'RS'],
            ['cidade_id' => 192, 'estado_id' => 9, 'cidade_nome' => 'Amaralina', 'cidade_uf' => 'GO'],
            ['cidade_id' => 193, 'estado_id' => 18, 'cidade_nome' => 'Amarante', 'cidade_uf' => 'PI'],
            ['cidade_id' => 194, 'estado_id' => 10, 'cidade_nome' => 'Amarante do Maranhão', 'cidade_uf' => 'MA'],
            ['cidade_id' => 195, 'estado_id' => 5, 'cidade_nome' => 'Amargosa', 'cidade_uf' => 'BA'],
            ['cidade_id' => 196, 'estado_id' => 4, 'cidade_nome' => 'Amaturá', 'cidade_uf' => 'AM'],
            ['cidade_id' => 197, 'estado_id' => 5, 'cidade_nome' => 'Amélia Rodrigues', 'cidade_uf' => 'BA'],
            ['cidade_id' => 198, 'estado_id' => 5, 'cidade_nome' => 'América Dourada', 'cidade_uf' => 'BA'],
            ['cidade_id' => 199, 'estado_id' => 25, 'cidade_nome' => 'Americana', 'cidade_uf' => 'SP'],
            ['cidade_id' => 200, 'estado_id' => 9, 'cidade_nome' => 'Americano do Brasil', 'cidade_uf' => 'GO'],
            ['cidade_id' => 201, 'estado_id' => 25, 'cidade_nome' => 'Américo Brasiliense', 'cidade_uf' => 'SP'],
            ['cidade_id' => 202, 'estado_id' => 25, 'cidade_nome' => 'Américo de Campos', 'cidade_uf' => 'SP'],
            ['cidade_id' => 203, 'estado_id' => 21, 'cidade_nome' => 'Ametista do Sul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 204, 'estado_id' => 6, 'cidade_nome' => 'Amontada', 'cidade_uf' => 'CE'],
            ['cidade_id' => 205, 'estado_id' => 9, 'cidade_nome' => 'Amorinópolis', 'cidade_uf' => 'GO'],
            ['cidade_id' => 206, 'estado_id' => 15, 'cidade_nome' => 'Amparo', 'cidade_uf' => 'PB'],
            ['cidade_id' => 207, 'estado_id' => 25, 'cidade_nome' => 'Amparo', 'cidade_uf' => 'SP'],
            ['cidade_id' => 208, 'estado_id' => 26, 'cidade_nome' => 'Amparo de São Francisco', 'cidade_uf' => 'SE'],
            ['cidade_id' => 209, 'estado_id' => 13, 'cidade_nome' => 'Amparo do Serra', 'cidade_uf' => 'MG'],
            ['cidade_id' => 210, 'estado_id' => 16, 'cidade_nome' => 'Ampére', 'cidade_uf' => 'PR'],
            ['cidade_id' => 211, 'estado_id' => 2, 'cidade_nome' => 'Anadia', 'cidade_uf' => 'AL'],
            ['cidade_id' => 212, 'estado_id' => 5, 'cidade_nome' => 'Anagé', 'cidade_uf' => 'BA'],
            ['cidade_id' => 213, 'estado_id' => 16, 'cidade_nome' => 'Anahy', 'cidade_uf' => 'PR'],
            ['cidade_id' => 214, 'estado_id' => 14, 'cidade_nome' => 'Anajás', 'cidade_uf' => 'PA'],
            ['cidade_id' => 215, 'estado_id' => 10, 'cidade_nome' => 'Anajatuba', 'cidade_uf' => 'MA'],
            ['cidade_id' => 216, 'estado_id' => 25, 'cidade_nome' => 'Analândia', 'cidade_uf' => 'SP'],
            ['cidade_id' => 217, 'estado_id' => 4, 'cidade_nome' => 'Anamã', 'cidade_uf' => 'AM'],
            ['cidade_id' => 218, 'estado_id' => 27, 'cidade_nome' => 'Ananás', 'cidade_uf' => 'TO'],
            ['cidade_id' => 219, 'estado_id' => 14, 'cidade_nome' => 'Ananindeua', 'cidade_uf' => 'PA'],
            ['cidade_id' => 220, 'estado_id' => 9, 'cidade_nome' => 'Anápolis', 'cidade_uf' => 'GO'],
            ['cidade_id' => 221, 'estado_id' => 14, 'cidade_nome' => 'Anapu', 'cidade_uf' => 'PA'],
            ['cidade_id' => 222, 'estado_id' => 10, 'cidade_nome' => 'Anapurus', 'cidade_uf' => 'MA'],
            ['cidade_id' => 223, 'estado_id' => 12, 'cidade_nome' => 'Anastácio', 'cidade_uf' => 'MS'],
            ['cidade_id' => 224, 'estado_id' => 12, 'cidade_nome' => 'Anaurilândia', 'cidade_uf' => 'MS'],
            ['cidade_id' => 225, 'estado_id' => 8, 'cidade_nome' => 'Anchieta', 'cidade_uf' => 'ES'],
            ['cidade_id' => 226, 'estado_id' => 24, 'cidade_nome' => 'Anchieta', 'cidade_uf' => 'SC'],
            ['cidade_id' => 227, 'estado_id' => 5, 'cidade_nome' => 'Andaraí', 'cidade_uf' => 'BA'],
            ['cidade_id' => 228, 'estado_id' => 16, 'cidade_nome' => 'Andirá', 'cidade_uf' => 'PR'],
            ['cidade_id' => 229, 'estado_id' => 5, 'cidade_nome' => 'Andorinha', 'cidade_uf' => 'BA'],
            ['cidade_id' => 230, 'estado_id' => 13, 'cidade_nome' => 'Andradas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 231, 'estado_id' => 25, 'cidade_nome' => 'Andradina', 'cidade_uf' => 'SP'],
            ['cidade_id' => 232, 'estado_id' => 21, 'cidade_nome' => 'André da Rocha', 'cidade_uf' => 'RS'],
            ['cidade_id' => 233, 'estado_id' => 13, 'cidade_nome' => 'Andrelândia', 'cidade_uf' => 'MG'],
            ['cidade_id' => 234, 'estado_id' => 25, 'cidade_nome' => 'Angatuba', 'cidade_uf' => 'SP'],
            ['cidade_id' => 235, 'estado_id' => 13, 'cidade_nome' => 'Angelândia', 'cidade_uf' => 'MG'],
            ['cidade_id' => 236, 'estado_id' => 12, 'cidade_nome' => 'Angélica', 'cidade_uf' => 'MS'],
            ['cidade_id' => 237, 'estado_id' => 17, 'cidade_nome' => 'Angelim', 'cidade_uf' => 'PE'],
            ['cidade_id' => 238, 'estado_id' => 24, 'cidade_nome' => 'Angelina', 'cidade_uf' => 'SC'],
            ['cidade_id' => 239, 'estado_id' => 5, 'cidade_nome' => 'Angical', 'cidade_uf' => 'BA'],
            ['cidade_id' => 240, 'estado_id' => 18, 'cidade_nome' => 'Angical do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 241, 'estado_id' => 27, 'cidade_nome' => 'Angico', 'cidade_uf' => 'TO'],
            ['cidade_id' => 242, 'estado_id' => 20, 'cidade_nome' => 'Angicos', 'cidade_uf' => 'RN'],
            ['cidade_id' => 243, 'estado_id' => 19, 'cidade_nome' => 'Angra dos Reis', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 244, 'estado_id' => 5, 'cidade_nome' => 'Anguera', 'cidade_uf' => 'BA'],
            ['cidade_id' => 245, 'estado_id' => 16, 'cidade_nome' => 'Ângulo', 'cidade_uf' => 'PR'],
            ['cidade_id' => 246, 'estado_id' => 9, 'cidade_nome' => 'Anhanguera', 'cidade_uf' => 'GO'],
            ['cidade_id' => 247, 'estado_id' => 25, 'cidade_nome' => 'Anhembi', 'cidade_uf' => 'SP'],
            ['cidade_id' => 248, 'estado_id' => 25, 'cidade_nome' => 'Anhumas', 'cidade_uf' => 'SP'],
            ['cidade_id' => 249, 'estado_id' => 9, 'cidade_nome' => 'Anicuns', 'cidade_uf' => 'GO'],
            ['cidade_id' => 250, 'estado_id' => 18, 'cidade_nome' => 'Anísio de Abreu', 'cidade_uf' => 'PI'],
            ['cidade_id' => 251, 'estado_id' => 24, 'cidade_nome' => 'Anita Garibaldi', 'cidade_uf' => 'SC'],
            ['cidade_id' => 252, 'estado_id' => 24, 'cidade_nome' => 'Anitápolis', 'cidade_uf' => 'SC'],
            ['cidade_id' => 253, 'estado_id' => 4, 'cidade_nome' => 'Anori', 'cidade_uf' => 'AM'],
            ['cidade_id' => 254, 'estado_id' => 21, 'cidade_nome' => 'Anta Gorda', 'cidade_uf' => 'RS'],
            ['cidade_id' => 255, 'estado_id' => 5, 'cidade_nome' => 'Antas', 'cidade_uf' => 'BA'],
            ['cidade_id' => 256, 'estado_id' => 16, 'cidade_nome' => 'Antonina', 'cidade_uf' => 'PR'],
            ['cidade_id' => 257, 'estado_id' => 6, 'cidade_nome' => 'Antonina do Norte', 'cidade_uf' => 'CE'],
            ['cidade_id' => 258, 'estado_id' => 18, 'cidade_nome' => 'Antônio Almeida', 'cidade_uf' => 'PI'],
            ['cidade_id' => 259, 'estado_id' => 5, 'cidade_nome' => 'Antônio Cardoso', 'cidade_uf' => 'BA'],
            ['cidade_id' => 260, 'estado_id' => 13, 'cidade_nome' => 'Antônio Carlos', 'cidade_uf' => 'MG'],
            ['cidade_id' => 261, 'estado_id' => 24, 'cidade_nome' => 'Antônio Carlos', 'cidade_uf' => 'SC'],
            ['cidade_id' => 262, 'estado_id' => 13, 'cidade_nome' => 'Antônio Dias', 'cidade_uf' => 'MG'],
            ['cidade_id' => 263, 'estado_id' => 5, 'cidade_nome' => 'Antônio Gonçalves', 'cidade_uf' => 'BA'],
            ['cidade_id' => 264, 'estado_id' => 12, 'cidade_nome' => 'Antônio João', 'cidade_uf' => 'MS'],
            ['cidade_id' => 265, 'estado_id' => 20, 'cidade_nome' => 'Antônio Martins', 'cidade_uf' => 'RN'],
            ['cidade_id' => 266, 'estado_id' => 16, 'cidade_nome' => 'Antônio Olinto', 'cidade_uf' => 'PR'],
            ['cidade_id' => 267, 'estado_id' => 21, 'cidade_nome' => 'Antônio Prado', 'cidade_uf' => 'RS'],
            ['cidade_id' => 268, 'estado_id' => 13, 'cidade_nome' => 'Antônio Prado de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 269, 'estado_id' => 15, 'cidade_nome' => 'Aparecida', 'cidade_uf' => 'PB'],
            ['cidade_id' => 270, 'estado_id' => 25, 'cidade_nome' => 'Aparecida', 'cidade_uf' => 'SP'],
            ['cidade_id' => 271, 'estado_id' => 9, 'cidade_nome' => 'Aparecida de Goiânia', 'cidade_uf' => 'GO'],
            ['cidade_id' => 272, 'estado_id' => 9, 'cidade_nome' => 'Aparecida do Rio Doce', 'cidade_uf' => 'GO'],
            ['cidade_id' => 273, 'estado_id' => 27, 'cidade_nome' => 'Aparecida do Rio Negro', 'cidade_uf' => 'TO'],
            ['cidade_id' => 274, 'estado_id' => 12, 'cidade_nome' => 'Aparecida do Taboado', 'cidade_uf' => 'MS'],
            ['cidade_id' => 275, 'estado_id' => 25, 'cidade_nome' => 'Aparecida d\'Oeste', 'cidade_uf' => 'SP'],
            ['cidade_id' => 276, 'estado_id' => 19, 'cidade_nome' => 'Aperibé', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 277, 'estado_id' => 8, 'cidade_nome' => 'Apiacá', 'cidade_uf' => 'ES'],
            ['cidade_id' => 278, 'estado_id' => 11, 'cidade_nome' => 'Apiacás', 'cidade_uf' => 'MT'],
            ['cidade_id' => 279, 'estado_id' => 25, 'cidade_nome' => 'Apiaí', 'cidade_uf' => 'SP'],
            ['cidade_id' => 280, 'estado_id' => 10, 'cidade_nome' => 'Apicum-Açu', 'cidade_uf' => 'MA'],
            ['cidade_id' => 281, 'estado_id' => 24, 'cidade_nome' => 'Apiúna', 'cidade_uf' => 'SC'],
            ['cidade_id' => 282, 'estado_id' => 20, 'cidade_nome' => 'Apodi', 'cidade_uf' => 'RN'],
            ['cidade_id' => 283, 'estado_id' => 5, 'cidade_nome' => 'Aporá', 'cidade_uf' => 'BA'],
            ['cidade_id' => 284, 'estado_id' => 9, 'cidade_nome' => 'Aporé', 'cidade_uf' => 'GO'],
            ['cidade_id' => 285, 'estado_id' => 5, 'cidade_nome' => 'Apuarema', 'cidade_uf' => 'BA'],
            ['cidade_id' => 286, 'estado_id' => 16, 'cidade_nome' => 'Apucarana', 'cidade_uf' => 'PR'],
            ['cidade_id' => 287, 'estado_id' => 4, 'cidade_nome' => 'Apuí', 'cidade_uf' => 'AM'],
            ['cidade_id' => 288, 'estado_id' => 6, 'cidade_nome' => 'Apuiarés', 'cidade_uf' => 'CE'],
            ['cidade_id' => 289, 'estado_id' => 26, 'cidade_nome' => 'Aquidabã', 'cidade_uf' => 'SE'],
            ['cidade_id' => 290, 'estado_id' => 12, 'cidade_nome' => 'Aquidauana', 'cidade_uf' => 'MS'],
            ['cidade_id' => 291, 'estado_id' => 6, 'cidade_nome' => 'Aquiraz', 'cidade_uf' => 'CE'],
            ['cidade_id' => 292, 'estado_id' => 24, 'cidade_nome' => 'Arabutã', 'cidade_uf' => 'SC'],
            ['cidade_id' => 293, 'estado_id' => 15, 'cidade_nome' => 'Araçagi', 'cidade_uf' => 'PB'],
            ['cidade_id' => 294, 'estado_id' => 13, 'cidade_nome' => 'Araçaí', 'cidade_uf' => 'MG'],
            ['cidade_id' => 295, 'estado_id' => 26, 'cidade_nome' => 'Aracaju', 'cidade_uf' => 'SE'],
            ['cidade_id' => 296, 'estado_id' => 25, 'cidade_nome' => 'Araçariguama', 'cidade_uf' => 'SP'],
            ['cidade_id' => 297, 'estado_id' => 5, 'cidade_nome' => 'Araças', 'cidade_uf' => 'BA'],
            ['cidade_id' => 298, 'estado_id' => 6, 'cidade_nome' => 'Aracati', 'cidade_uf' => 'CE'],
            ['cidade_id' => 299, 'estado_id' => 5, 'cidade_nome' => 'Aracatu', 'cidade_uf' => 'BA'],
            ['cidade_id' => 300, 'estado_id' => 25, 'cidade_nome' => 'Araçatuba', 'cidade_uf' => 'SP'],
            ['cidade_id' => 301, 'estado_id' => 5, 'cidade_nome' => 'Araci', 'cidade_uf' => 'BA'],
            ['cidade_id' => 302, 'estado_id' => 13, 'cidade_nome' => 'Aracitaba', 'cidade_uf' => 'MG'],
            ['cidade_id' => 303, 'estado_id' => 6, 'cidade_nome' => 'Aracoiaba', 'cidade_uf' => 'CE'],
            ['cidade_id' => 304, 'estado_id' => 17, 'cidade_nome' => 'Araçoiaba', 'cidade_uf' => 'PE'],
            ['cidade_id' => 305, 'estado_id' => 25, 'cidade_nome' => 'Araçoiaba da Serra', 'cidade_uf' => 'SP'],
            ['cidade_id' => 306, 'estado_id' => 8, 'cidade_nome' => 'Aracruz', 'cidade_uf' => 'ES'],
            ['cidade_id' => 307, 'estado_id' => 9, 'cidade_nome' => 'Araçu', 'cidade_uf' => 'GO'],
            ['cidade_id' => 308, 'estado_id' => 13, 'cidade_nome' => 'Araçuaí', 'cidade_uf' => 'MG'],
            ['cidade_id' => 309, 'estado_id' => 9, 'cidade_nome' => 'Aragarças', 'cidade_uf' => 'GO'],
            ['cidade_id' => 310, 'estado_id' => 9, 'cidade_nome' => 'Aragoiânia', 'cidade_uf' => 'GO'],
            ['cidade_id' => 311, 'estado_id' => 27, 'cidade_nome' => 'Aragominas', 'cidade_uf' => 'TO'],
            ['cidade_id' => 312, 'estado_id' => 27, 'cidade_nome' => 'Araguacema', 'cidade_uf' => 'TO'],
            ['cidade_id' => 313, 'estado_id' => 27, 'cidade_nome' => 'Araguaçu', 'cidade_uf' => 'TO'],
            ['cidade_id' => 314, 'estado_id' => 11, 'cidade_nome' => 'Araguaiana', 'cidade_uf' => 'MT'],
            ['cidade_id' => 315, 'estado_id' => 27, 'cidade_nome' => 'Araguaína', 'cidade_uf' => 'TO'],
            ['cidade_id' => 316, 'estado_id' => 11, 'cidade_nome' => 'Araguainha', 'cidade_uf' => 'MT'],
            ['cidade_id' => 317, 'estado_id' => 10, 'cidade_nome' => 'Araguanã', 'cidade_uf' => 'MA'],
            ['cidade_id' => 318, 'estado_id' => 27, 'cidade_nome' => 'Araguanã', 'cidade_uf' => 'TO'],
            ['cidade_id' => 319, 'estado_id' => 9, 'cidade_nome' => 'Araguapaz', 'cidade_uf' => 'GO'],
            ['cidade_id' => 320, 'estado_id' => 13, 'cidade_nome' => 'Araguari', 'cidade_uf' => 'MG'],
            ['cidade_id' => 321, 'estado_id' => 27, 'cidade_nome' => 'Araguatins', 'cidade_uf' => 'TO'],
            ['cidade_id' => 322, 'estado_id' => 10, 'cidade_nome' => 'Araioses', 'cidade_uf' => 'MA'],
            ['cidade_id' => 323, 'estado_id' => 12, 'cidade_nome' => 'Aral Moreira', 'cidade_uf' => 'MS'],
            ['cidade_id' => 324, 'estado_id' => 5, 'cidade_nome' => 'Aramari', 'cidade_uf' => 'BA'],
            ['cidade_id' => 325, 'estado_id' => 21, 'cidade_nome' => 'Arambaré', 'cidade_uf' => 'RS'],
            ['cidade_id' => 326, 'estado_id' => 10, 'cidade_nome' => 'Arame', 'cidade_uf' => 'MA'],
            ['cidade_id' => 327, 'estado_id' => 25, 'cidade_nome' => 'Aramina', 'cidade_uf' => 'SP'],
            ['cidade_id' => 328, 'estado_id' => 25, 'cidade_nome' => 'Arandu', 'cidade_uf' => 'SP'],
            ['cidade_id' => 329, 'estado_id' => 13, 'cidade_nome' => 'Arantina', 'cidade_uf' => 'MG'],
            ['cidade_id' => 330, 'estado_id' => 25, 'cidade_nome' => 'Arapeí', 'cidade_uf' => 'SP'],
            ['cidade_id' => 331, 'estado_id' => 2, 'cidade_nome' => 'Arapiraca', 'cidade_uf' => 'AL'],
            ['cidade_id' => 332, 'estado_id' => 27, 'cidade_nome' => 'Arapoema', 'cidade_uf' => 'TO'],
            ['cidade_id' => 333, 'estado_id' => 13, 'cidade_nome' => 'Araponga', 'cidade_uf' => 'MG'],
            ['cidade_id' => 334, 'estado_id' => 16, 'cidade_nome' => 'Arapongas', 'cidade_uf' => 'PR'],
            ['cidade_id' => 335, 'estado_id' => 13, 'cidade_nome' => 'Araporã', 'cidade_uf' => 'MG'],
            ['cidade_id' => 336, 'estado_id' => 16, 'cidade_nome' => 'Arapoti', 'cidade_uf' => 'PR'],
            ['cidade_id' => 337, 'estado_id' => 13, 'cidade_nome' => 'Arapuá', 'cidade_uf' => 'MG'],
            ['cidade_id' => 338, 'estado_id' => 16, 'cidade_nome' => 'Arapuã', 'cidade_uf' => 'PR'],
            ['cidade_id' => 339, 'estado_id' => 11, 'cidade_nome' => 'Araputanga', 'cidade_uf' => 'MT'],
            ['cidade_id' => 340, 'estado_id' => 24, 'cidade_nome' => 'Araquari', 'cidade_uf' => 'SC'],
            ['cidade_id' => 341, 'estado_id' => 15, 'cidade_nome' => 'Arara', 'cidade_uf' => 'PB'],
            ['cidade_id' => 342, 'estado_id' => 24, 'cidade_nome' => 'Araranguá', 'cidade_uf' => 'SC'],
            ['cidade_id' => 343, 'estado_id' => 25, 'cidade_nome' => 'Araraquara', 'cidade_uf' => 'SP'],
            ['cidade_id' => 344, 'estado_id' => 25, 'cidade_nome' => 'Araras', 'cidade_uf' => 'SP'],
            ['cidade_id' => 345, 'estado_id' => 6, 'cidade_nome' => 'Ararendá', 'cidade_uf' => 'CE'],
            ['cidade_id' => 346, 'estado_id' => 10, 'cidade_nome' => 'Arari', 'cidade_uf' => 'MA'],
            ['cidade_id' => 347, 'estado_id' => 21, 'cidade_nome' => 'Araricá', 'cidade_uf' => 'RS'],
            ['cidade_id' => 348, 'estado_id' => 6, 'cidade_nome' => 'Araripe', 'cidade_uf' => 'CE'],
            ['cidade_id' => 349, 'estado_id' => 17, 'cidade_nome' => 'Araripina', 'cidade_uf' => 'PE'],
            ['cidade_id' => 350, 'estado_id' => 19, 'cidade_nome' => 'Araruama', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 351, 'estado_id' => 15, 'cidade_nome' => 'Araruna', 'cidade_uf' => 'PB'],
            ['cidade_id' => 352, 'estado_id' => 16, 'cidade_nome' => 'Araruna', 'cidade_uf' => 'PR'],
            ['cidade_id' => 353, 'estado_id' => 5, 'cidade_nome' => 'Arataca', 'cidade_uf' => 'BA'],
            ['cidade_id' => 354, 'estado_id' => 21, 'cidade_nome' => 'Aratiba', 'cidade_uf' => 'RS'],
            ['cidade_id' => 355, 'estado_id' => 6, 'cidade_nome' => 'Aratuba', 'cidade_uf' => 'CE'],
            ['cidade_id' => 356, 'estado_id' => 5, 'cidade_nome' => 'Aratuípe', 'cidade_uf' => 'BA'],
            ['cidade_id' => 357, 'estado_id' => 26, 'cidade_nome' => 'Arauá', 'cidade_uf' => 'SE'],
            ['cidade_id' => 358, 'estado_id' => 16, 'cidade_nome' => 'Araucária', 'cidade_uf' => 'PR'],
            ['cidade_id' => 359, 'estado_id' => 13, 'cidade_nome' => 'Araújos', 'cidade_uf' => 'MG'],
            ['cidade_id' => 360, 'estado_id' => 13, 'cidade_nome' => 'Araxá', 'cidade_uf' => 'MG'],
            ['cidade_id' => 361, 'estado_id' => 13, 'cidade_nome' => 'Arceburgo', 'cidade_uf' => 'MG'],
            ['cidade_id' => 362, 'estado_id' => 25, 'cidade_nome' => 'Arco-Íris', 'cidade_uf' => 'SP'],
            ['cidade_id' => 363, 'estado_id' => 13, 'cidade_nome' => 'Arcos', 'cidade_uf' => 'MG'],
            ['cidade_id' => 364, 'estado_id' => 17, 'cidade_nome' => 'Arcoverde', 'cidade_uf' => 'PE'],
            ['cidade_id' => 365, 'estado_id' => 13, 'cidade_nome' => 'Areado', 'cidade_uf' => 'MG'],
            ['cidade_id' => 366, 'estado_id' => 19, 'cidade_nome' => 'Areal', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 367, 'estado_id' => 25, 'cidade_nome' => 'Arealva', 'cidade_uf' => 'SP'],
            ['cidade_id' => 368, 'estado_id' => 15, 'cidade_nome' => 'Areia', 'cidade_uf' => 'PB'],
            ['cidade_id' => 369, 'estado_id' => 20, 'cidade_nome' => 'Areia Branca', 'cidade_uf' => 'RN'],
            ['cidade_id' => 370, 'estado_id' => 26, 'cidade_nome' => 'Areia Branca', 'cidade_uf' => 'SE'],
            ['cidade_id' => 371, 'estado_id' => 15, 'cidade_nome' => 'Areia de Baraúnas', 'cidade_uf' => 'PB'],
            ['cidade_id' => 372, 'estado_id' => 15, 'cidade_nome' => 'Areial', 'cidade_uf' => 'PB'],
            ['cidade_id' => 373, 'estado_id' => 25, 'cidade_nome' => 'Areias', 'cidade_uf' => 'SP'],
            ['cidade_id' => 374, 'estado_id' => 25, 'cidade_nome' => 'Areiópolis', 'cidade_uf' => 'SP'],
            ['cidade_id' => 375, 'estado_id' => 11, 'cidade_nome' => 'Arenápolis', 'cidade_uf' => 'MT'],
            ['cidade_id' => 376, 'estado_id' => 9, 'cidade_nome' => 'Arenópolis', 'cidade_uf' => 'GO'],
            ['cidade_id' => 377, 'estado_id' => 20, 'cidade_nome' => 'Arês', 'cidade_uf' => 'RN'],
            ['cidade_id' => 378, 'estado_id' => 13, 'cidade_nome' => 'Argirita', 'cidade_uf' => 'MG'],
            ['cidade_id' => 379, 'estado_id' => 13, 'cidade_nome' => 'Aricanduva', 'cidade_uf' => 'MG'],
            ['cidade_id' => 380, 'estado_id' => 13, 'cidade_nome' => 'Arinos', 'cidade_uf' => 'MG'],
            ['cidade_id' => 381, 'estado_id' => 11, 'cidade_nome' => 'Aripuanã', 'cidade_uf' => 'MT'],
            ['cidade_id' => 382, 'estado_id' => 22, 'cidade_nome' => 'Ariquemes', 'cidade_uf' => 'RO'],
            ['cidade_id' => 383, 'estado_id' => 25, 'cidade_nome' => 'Ariranha', 'cidade_uf' => 'SP'],
            ['cidade_id' => 384, 'estado_id' => 16, 'cidade_nome' => 'Ariranha do Ivaí', 'cidade_uf' => 'PR'],
            ['cidade_id' => 385, 'estado_id' => 19, 'cidade_nome' => 'Armação dos Búzios', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 386, 'estado_id' => 24, 'cidade_nome' => 'Armazém', 'cidade_uf' => 'SC'],
            ['cidade_id' => 387, 'estado_id' => 6, 'cidade_nome' => 'Arneiroz', 'cidade_uf' => 'CE'],
            ['cidade_id' => 388, 'estado_id' => 18, 'cidade_nome' => 'Aroazes', 'cidade_uf' => 'PI'],
            ['cidade_id' => 389, 'estado_id' => 15, 'cidade_nome' => 'Aroeiras', 'cidade_uf' => 'PB'],
            ['cidade_id' => 390, 'estado_id' => 18, 'cidade_nome' => 'Aroeiras do Itaim', 'cidade_uf' => 'PI'],
            ['cidade_id' => 391, 'estado_id' => 18, 'cidade_nome' => 'Arraial', 'cidade_uf' => 'PI'],
            ['cidade_id' => 392, 'estado_id' => 19, 'cidade_nome' => 'Arraial do Cabo', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 393, 'estado_id' => 27, 'cidade_nome' => 'Arraias', 'cidade_uf' => 'TO'],
            ['cidade_id' => 394, 'estado_id' => 21, 'cidade_nome' => 'Arroio do Meio', 'cidade_uf' => 'RS'],
            ['cidade_id' => 395, 'estado_id' => 21, 'cidade_nome' => 'Arroio do Padre', 'cidade_uf' => 'RS'],
            ['cidade_id' => 396, 'estado_id' => 21, 'cidade_nome' => 'Arroio do Sal', 'cidade_uf' => 'RS'],
            ['cidade_id' => 397, 'estado_id' => 21, 'cidade_nome' => 'Arroio do Tigre', 'cidade_uf' => 'RS'],
            ['cidade_id' => 398, 'estado_id' => 21, 'cidade_nome' => 'Arroio dos Ratos', 'cidade_uf' => 'RS'],
            ['cidade_id' => 399, 'estado_id' => 21, 'cidade_nome' => 'Arroio Grande', 'cidade_uf' => 'RS'],
            ['cidade_id' => 400, 'estado_id' => 24, 'cidade_nome' => 'Arroio Trinta', 'cidade_uf' => 'SC'],
            ['cidade_id' => 401, 'estado_id' => 25, 'cidade_nome' => 'Artur Nogueira', 'cidade_uf' => 'SP'],
            ['cidade_id' => 402, 'estado_id' => 9, 'cidade_nome' => 'Aruanã', 'cidade_uf' => 'GO'],
            ['cidade_id' => 403, 'estado_id' => 25, 'cidade_nome' => 'Arujá', 'cidade_uf' => 'SP'],
            ['cidade_id' => 404, 'estado_id' => 24, 'cidade_nome' => 'Arvoredo', 'cidade_uf' => 'SC'],
            ['cidade_id' => 405, 'estado_id' => 21, 'cidade_nome' => 'Arvorezinha', 'cidade_uf' => 'RS'],
            ['cidade_id' => 406, 'estado_id' => 24, 'cidade_nome' => 'Ascurra', 'cidade_uf' => 'SC'],
            ['cidade_id' => 407, 'estado_id' => 25, 'cidade_nome' => 'Aspásia', 'cidade_uf' => 'SP'],
            ['cidade_id' => 408, 'estado_id' => 16, 'cidade_nome' => 'Assaí', 'cidade_uf' => 'PR'],
            ['cidade_id' => 409, 'estado_id' => 6,  'cidade_nome' => 'Assaré', 'cidade_uf' => 'CE'],
            ['cidade_id' => 410, 'estado_id' => 25, 'cidade_nome' => 'Assis', 'cidade_uf' => 'SP'],
            ['cidade_id' => 411, 'estado_id' => 1, 'cidade_nome' => 'Assis Brasil', 'cidade_uf' => 'AC'],
            ['cidade_id' => 412, 'estado_id' => 16, 'cidade_nome' => 'Assis Chateaubriand', 'cidade_uf' => 'PR'],
            ['cidade_id' => 413, 'estado_id' => 15, 'cidade_nome' => 'Assunção', 'cidade_uf' => 'PB'],
            ['cidade_id' => 414, 'estado_id' => 18, 'cidade_nome' => 'Assunção do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 415, 'estado_id' => 13, 'cidade_nome' => 'Astolfo Dutra', 'cidade_uf' => 'MG'],
            ['cidade_id' => 416, 'estado_id' => 16, 'cidade_nome' => 'Astorga', 'cidade_uf' => 'PR'],
            ['cidade_id' => 417, 'estado_id' => 2, 'cidade_nome' => 'Atalaia', 'cidade_uf' => 'AL'],
            ['cidade_id' => 418, 'estado_id' => 16, 'cidade_nome' => 'Atalaia', 'cidade_uf' => 'PR'],
            ['cidade_id' => 419, 'estado_id' => 4, 'cidade_nome' => 'Atalaia do Norte', 'cidade_uf' => 'AM'],
            ['cidade_id' => 420, 'estado_id' => 24, 'cidade_nome' => 'Atalanta', 'cidade_uf' => 'SC'],
            ['cidade_id' => 421, 'estado_id' => 13, 'cidade_nome' => 'Ataléia', 'cidade_uf' => 'MG'],
            ['cidade_id' => 422, 'estado_id' => 25, 'cidade_nome' => 'Atibaia', 'cidade_uf' => 'SP'],
            ['cidade_id' => 423, 'estado_id' => 8, 'cidade_nome' => 'Atilio Vivacqua', 'cidade_uf' => 'ES'],
            ['cidade_id' => 424, 'estado_id' => 27, 'cidade_nome' => 'Augustinópolis', 'cidade_uf' => 'TO'],
            ['cidade_id' => 425, 'estado_id' => 14, 'cidade_nome' => 'Augusto Corrêa', 'cidade_uf' => 'PA'],
            ['cidade_id' => 426, 'estado_id' => 13, 'cidade_nome' => 'Augusto de Lima', 'cidade_uf' => 'MG'],
            ['cidade_id' => 427, 'estado_id' => 21, 'cidade_nome' => 'Augusto Pestana', 'cidade_uf' => 'RS'],
            ['cidade_id' => 428, 'estado_id' => 20, 'cidade_nome' => 'Augusto Severo', 'cidade_uf' => 'RN'],
            ['cidade_id' => 429, 'estado_id' => 21, 'cidade_nome' => 'Áurea', 'cidade_uf' => 'RS'],
            ['cidade_id' => 430, 'estado_id' => 5, 'cidade_nome' => 'Aurelino Leal', 'cidade_uf' => 'BA'],
            ['cidade_id' => 431, 'estado_id' => 25, 'cidade_nome' => 'Auriflama', 'cidade_uf' => 'SP'],
            ['cidade_id' => 432, 'estado_id' => 9, 'cidade_nome' => 'Aurilândia', 'cidade_uf' => 'GO'],
            ['cidade_id' => 433, 'estado_id' => 6, 'cidade_nome' => 'Aurora', 'cidade_uf' => 'CE'],
            ['cidade_id' => 434, 'estado_id' => 24, 'cidade_nome' => 'Aurora', 'cidade_uf' => 'SC'],
            ['cidade_id' => 435, 'estado_id' => 14, 'cidade_nome' => 'Aurora do Pará', 'cidade_uf' => 'PA'],
            ['cidade_id' => 436, 'estado_id' => 27, 'cidade_nome' => 'Aurora do Tocantins', 'cidade_uf' => 'TO'],
            ['cidade_id' => 437, 'estado_id' => 4, 'cidade_nome' => 'Autazes', 'cidade_uf' => 'AM'],
            ['cidade_id' => 438, 'estado_id' => 25, 'cidade_nome' => 'Avaí', 'cidade_uf' => 'SP'],
            ['cidade_id' => 439, 'estado_id' => 25, 'cidade_nome' => 'Avanhandava', 'cidade_uf' => 'SP'],
            ['cidade_id' => 440, 'estado_id' => 25, 'cidade_nome' => 'Avaré', 'cidade_uf' => 'SP'],
            ['cidade_id' => 441, 'estado_id' => 14, 'cidade_nome' => 'Aveiro', 'cidade_uf' => 'PA'],
            ['cidade_id' => 442, 'estado_id' => 18, 'cidade_nome' => 'Avelino Lopes', 'cidade_uf' => 'PI'],
            ['cidade_id' => 443, 'estado_id' => 9, 'cidade_nome' => 'Avelinópolis', 'cidade_uf' => 'GO'],
            ['cidade_id' => 444, 'estado_id' => 10, 'cidade_nome' => 'Axixá', 'cidade_uf' => 'MA'],
            ['cidade_id' => 445, 'estado_id' => 27, 'cidade_nome' => 'Axixá do Tocantins', 'cidade_uf' => 'TO'],
            ['cidade_id' => 446, 'estado_id' => 27, 'cidade_nome' => 'Babaçulândia', 'cidade_uf' => 'TO'],
            ['cidade_id' => 447, 'estado_id' => 10, 'cidade_nome' => 'Bacabal', 'cidade_uf' => 'MA'],
            ['cidade_id' => 448, 'estado_id' => 10, 'cidade_nome' => 'Bacabeira', 'cidade_uf' => 'MA'],
            ['cidade_id' => 449, 'estado_id' => 10, 'cidade_nome' => 'Bacuri', 'cidade_uf' => 'MA'],
            ['cidade_id' => 450, 'estado_id' => 10, 'cidade_nome' => 'Bacurituba', 'cidade_uf' => 'MA'],
            ['cidade_id' => 451, 'estado_id' => 25, 'cidade_nome' => 'Bady Bassitt', 'cidade_uf' => 'SP'],
            ['cidade_id' => 452, 'estado_id' => 13, 'cidade_nome' => 'Baependi', 'cidade_uf' => 'MG'],
            ['cidade_id' => 453, 'estado_id' => 21, 'cidade_nome' => 'Bagé', 'cidade_uf' => 'RS'],
            ['cidade_id' => 454, 'estado_id' => 14, 'cidade_nome' => 'Bagre', 'cidade_uf' => 'PA'],
            ['cidade_id' => 455, 'estado_id' => 15, 'cidade_nome' => 'Baía da Traição', 'cidade_uf' => 'PB'],
            ['cidade_id' => 456, 'estado_id' => 20, 'cidade_nome' => 'Baía Formosa', 'cidade_uf' => 'RN'],
            ['cidade_id' => 457, 'estado_id' => 5, 'cidade_nome' => 'Baianópolis', 'cidade_uf' => 'BA'],
            ['cidade_id' => 458, 'estado_id' => 14, 'cidade_nome' => 'Baião', 'cidade_uf' => 'PA'],
            ['cidade_id' => 459, 'estado_id' => 5, 'cidade_nome' => 'Baixa Grande', 'cidade_uf' => 'BA'],
            ['cidade_id' => 460, 'estado_id' => 18, 'cidade_nome' => 'Baixa Grande do Ribeiro', 'cidade_uf' => 'PI'],
            ['cidade_id' => 461, 'estado_id' => 6, 'cidade_nome' => 'Baixio', 'cidade_uf' => 'CE'],
            ['cidade_id' => 462, 'estado_id' => 8, 'cidade_nome' => 'Baixo Guandu', 'cidade_uf' => 'ES'],
            ['cidade_id' => 463, 'estado_id' => 25, 'cidade_nome' => 'Balbinos', 'cidade_uf' => 'SP'],
            ['cidade_id' => 464, 'estado_id' => 13, 'cidade_nome' => 'Baldim', 'cidade_uf' => 'MG'],
            ['cidade_id' => 465, 'estado_id' => 9, 'cidade_nome' => 'Baliza', 'cidade_uf' => 'GO'],
            ['cidade_id' => 466, 'estado_id' => 24, 'cidade_nome' => 'Balneário Arroio do Silva', 'cidade_uf' => 'SC'],
            ['cidade_id' => 467, 'estado_id' => 24, 'cidade_nome' => 'Balneário Barra do Sul', 'cidade_uf' => 'SC'],
            ['cidade_id' => 468, 'estado_id' => 24, 'cidade_nome' => 'Balneário Camboriú', 'cidade_uf' => 'SC'],
            ['cidade_id' => 469, 'estado_id' => 24, 'cidade_nome' => 'Balneário Gaivota', 'cidade_uf' => 'SC'],
            ['cidade_id' => 470, 'estado_id' => 24, 'cidade_nome' => 'Balneário Piçarras', 'cidade_uf' => 'SC'],
            ['cidade_id' => 471, 'estado_id' => 21, 'cidade_nome' => 'Balneário Pinhal', 'cidade_uf' => 'RS'],
            ['cidade_id' => 472, 'estado_id' => 16, 'cidade_nome' => 'Balsa Nova', 'cidade_uf' => 'PR'],
            ['cidade_id' => 473, 'estado_id' => 25, 'cidade_nome' => 'Bálsamo', 'cidade_uf' => 'SP'],
            ['cidade_id' => 474, 'estado_id' => 10, 'cidade_nome' => 'Balsas', 'cidade_uf' => 'MA'],
            ['cidade_id' => 475, 'estado_id' => 13, 'cidade_nome' => 'Bambuí', 'cidade_uf' => 'MG'],
            ['cidade_id' => 476, 'estado_id' => 6, 'cidade_nome' => 'Banabuiú', 'cidade_uf' => 'CE'],
            ['cidade_id' => 477, 'estado_id' => 25, 'cidade_nome' => 'Bananal', 'cidade_uf' => 'SP'],
            ['cidade_id' => 478, 'estado_id' => 15, 'cidade_nome' => 'Bananeiras', 'cidade_uf' => 'PB'],
            ['cidade_id' => 479, 'estado_id' => 13, 'cidade_nome' => 'Bandeira', 'cidade_uf' => 'MG'],
            ['cidade_id' => 480, 'estado_id' => 13, 'cidade_nome' => 'Bandeira do Sul', 'cidade_uf' => 'MG'],
            ['cidade_id' => 481, 'estado_id' => 24, 'cidade_nome' => 'Bandeirante', 'cidade_uf' => 'SC'],
            ['cidade_id' => 482, 'estado_id' => 12, 'cidade_nome' => 'Bandeirantes', 'cidade_uf' => 'MS'],
            ['cidade_id' => 483, 'estado_id' => 16, 'cidade_nome' => 'Bandeirantes', 'cidade_uf' => 'PR'],
            ['cidade_id' => 484, 'estado_id' => 27, 'cidade_nome' => 'Bandeirantes do Tocantins', 'cidade_uf' => 'TO'],
            ['cidade_id' => 485, 'estado_id' => 14, 'cidade_nome' => 'Bannach', 'cidade_uf' => 'PA'],
            ['cidade_id' => 486, 'estado_id' => 5, 'cidade_nome' => 'Banzaê', 'cidade_uf' => 'BA'],
            ['cidade_id' => 487, 'estado_id' => 21, 'cidade_nome' => 'Barão', 'cidade_uf' => 'RS'],
            ['cidade_id' => 488, 'estado_id' => 25, 'cidade_nome' => 'Barão de Antonina', 'cidade_uf' => 'SP'],
            ['cidade_id' => 489, 'estado_id' => 13, 'cidade_nome' => 'Barão de Cocais', 'cidade_uf' => 'MG'],
            ['cidade_id' => 490, 'estado_id' => 21, 'cidade_nome' => 'Barão de Cotegipe', 'cidade_uf' => 'RS'],
            ['cidade_id' => 491, 'estado_id' => 10, 'cidade_nome' => 'Barão de Grajaú', 'cidade_uf' => 'MA'],
            ['cidade_id' => 492, 'estado_id' => 11, 'cidade_nome' => 'Barão de Melgaço', 'cidade_uf' => 'MT'],
            ['cidade_id' => 493, 'estado_id' => 13, 'cidade_nome' => 'Barão de Monte Alto', 'cidade_uf' => 'MG'],
            ['cidade_id' => 494, 'estado_id' => 21, 'cidade_nome' => 'Barão do Triunfo', 'cidade_uf' => 'RS'],
            ['cidade_id' => 495, 'estado_id' => 15, 'cidade_nome' => 'Baraúna', 'cidade_uf' => 'PB'],
            ['cidade_id' => 496, 'estado_id' => 20, 'cidade_nome' => 'Baraúna', 'cidade_uf' => 'RN'],
            ['cidade_id' => 497, 'estado_id' => 13, 'cidade_nome' => 'Barbacena', 'cidade_uf' => 'MG'],
            ['cidade_id' => 498, 'estado_id' => 6, 'cidade_nome' => 'Barbalha', 'cidade_uf' => 'CE'],
            ['cidade_id' => 499, 'estado_id' => 25, 'cidade_nome' => 'Barbosa', 'cidade_uf' => 'SP'],
            ['cidade_id' => 500, 'estado_id' => 16, 'cidade_nome' => 'Barbosa Ferraz', 'cidade_uf' => 'PR'],
            ['cidade_id' => 501, 'estado_id' => 14, 'cidade_nome' => 'Barcarena', 'cidade_uf' => 'PA'],
            ['cidade_id' => 502, 'estado_id' => 20, 'cidade_nome' => 'Barcelona', 'cidade_uf' => 'RN'],
            ['cidade_id' => 503, 'estado_id' => 4, 'cidade_nome' => 'Barcelos', 'cidade_uf' => 'AM'],
            ['cidade_id' => 504, 'estado_id' => 25, 'cidade_nome' => 'Bariri', 'cidade_uf' => 'SP'],
            ['cidade_id' => 505, 'estado_id' => 5, 'cidade_nome' => 'Barra', 'cidade_uf' => 'BA'],
            ['cidade_id' => 506, 'estado_id' => 24, 'cidade_nome' => 'Barra Bonita', 'cidade_uf' => 'SC'],
            ['cidade_id' => 507, 'estado_id' => 25, 'cidade_nome' => 'Barra Bonita', 'cidade_uf' => 'SP'],
            ['cidade_id' => 508, 'estado_id' => 5, 'cidade_nome' => 'Barra da Estiva', 'cidade_uf' => 'BA'],
            ['cidade_id' => 509, 'estado_id' => 18, 'cidade_nome' => 'Barra D\'Alcântara', 'cidade_uf' => 'PI'],
            ['cidade_id' => 510, 'estado_id' => 17, 'cidade_nome' => 'Barra de Guabiraba', 'cidade_uf' => 'PE'],
            ['cidade_id' => 511, 'estado_id' => 15, 'cidade_nome' => 'Barra de Santa Rosa', 'cidade_uf' => 'PB'],
            ['cidade_id' => 512, 'estado_id' => 15, 'cidade_nome' => 'Barra de Santana', 'cidade_uf' => 'PB'],
            ['cidade_id' => 513, 'estado_id' => 2, 'cidade_nome' => 'Barra de Santo Antônio', 'cidade_uf' => 'AL'],
            ['cidade_id' => 514, 'estado_id' => 8, 'cidade_nome' => 'Barra de São Francisco', 'cidade_uf' => 'ES'],
            ['cidade_id' => 515, 'estado_id' => 2, 'cidade_nome' => 'Barra de São Miguel', 'cidade_uf' => 'AL'],
            ['cidade_id' => 516, 'estado_id' => 15, 'cidade_nome' => 'Barra de São Miguel', 'cidade_uf' => 'PB'],
            ['cidade_id' => 517, 'estado_id' => 11, 'cidade_nome' => 'Barra do Bugres', 'cidade_uf' => 'MT'],
            ['cidade_id' => 518, 'estado_id' => 25, 'cidade_nome' => 'Barra do Chapéu', 'cidade_uf' => 'SP'],
            ['cidade_id' => 519, 'estado_id' => 5, 'cidade_nome' => 'Barra do Choça', 'cidade_uf' => 'BA'],
            ['cidade_id' => 520, 'estado_id' => 10, 'cidade_nome' => 'Barra do Corda', 'cidade_uf' => 'MA'],
            ['cidade_id' => 521, 'estado_id' => 11, 'cidade_nome' => 'Barra do Garças', 'cidade_uf' => 'MT'],
            ['cidade_id' => 522, 'estado_id' => 21, 'cidade_nome' => 'Barra do Guarita', 'cidade_uf' => 'RS'],
            ['cidade_id' => 523, 'estado_id' => 16, 'cidade_nome' => 'Barra do Jacaré', 'cidade_uf' => 'PR'],
            ['cidade_id' => 524, 'estado_id' => 5, 'cidade_nome' => 'Barra do Mendes', 'cidade_uf' => 'BA'],
            ['cidade_id' => 525, 'estado_id' => 27, 'cidade_nome' => 'Barra do Ouro', 'cidade_uf' => 'TO'],
            ['cidade_id' => 526, 'estado_id' => 19, 'cidade_nome' => 'Barra do Piraí', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 527, 'estado_id' => 21, 'cidade_nome' => 'Barra do Quaraí', 'cidade_uf' => 'RS'],
            ['cidade_id' => 528, 'estado_id' => 21, 'cidade_nome' => 'Barra do Ribeiro', 'cidade_uf' => 'RS'],
            ['cidade_id' => 529, 'estado_id' => 21, 'cidade_nome' => 'Barra do Rio Azul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 530, 'estado_id' => 5, 'cidade_nome' => 'Barra do Rocha', 'cidade_uf' => 'BA'],
            ['cidade_id' => 531, 'estado_id' => 25, 'cidade_nome' => 'Barra do Turvo', 'cidade_uf' => 'SP'],
            ['cidade_id' => 532, 'estado_id' => 26, 'cidade_nome' => 'Barra dos Coqueiros', 'cidade_uf' => 'SE'],
            ['cidade_id' => 533, 'estado_id' => 21, 'cidade_nome' => 'Barra Funda', 'cidade_uf' => 'RS'],
            ['cidade_id' => 534, 'estado_id' => 13, 'cidade_nome' => 'Barra Longa', 'cidade_uf' => 'MG'],
            ['cidade_id' => 535, 'estado_id' => 19, 'cidade_nome' => 'Barra Mansa', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 536, 'estado_id' => 24, 'cidade_nome' => 'Barra Velha', 'cidade_uf' => 'SC'],
            ['cidade_id' => 537, 'estado_id' => 16, 'cidade_nome' => 'Barracão', 'cidade_uf' => 'PR'],
            ['cidade_id' => 538, 'estado_id' => 21, 'cidade_nome' => 'Barracão', 'cidade_uf' => 'RS'],
            ['cidade_id' => 539, 'estado_id' => 18, 'cidade_nome' => 'Barras', 'cidade_uf' => 'PI'],
            ['cidade_id' => 540, 'estado_id' => 6, 'cidade_nome' => 'Barreira', 'cidade_uf' => 'CE'],
            ['cidade_id' => 541, 'estado_id' => 5, 'cidade_nome' => 'Barreiras', 'cidade_uf' => 'BA'],
            ['cidade_id' => 542, 'estado_id' => 18, 'cidade_nome' => 'Barreiras do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 543, 'estado_id' => 4, 'cidade_nome' => 'Barreirinha', 'cidade_uf' => 'AM'],
            ['cidade_id' => 544, 'estado_id' => 10, 'cidade_nome' => 'Barreirinhas', 'cidade_uf' => 'MA'],
            ['cidade_id' => 545, 'estado_id' => 17, 'cidade_nome' => 'Barreiros', 'cidade_uf' => 'PE'],
            ['cidade_id' => 546, 'estado_id' => 25, 'cidade_nome' => 'Barretos', 'cidade_uf' => 'SP'],
            ['cidade_id' => 547, 'estado_id' => 25, 'cidade_nome' => 'Barrinha', 'cidade_uf' => 'SP'],
            ['cidade_id' => 548, 'estado_id' => 6, 'cidade_nome' => 'Barro', 'cidade_uf' => 'CE'],
            ['cidade_id' => 549, 'estado_id' => 5, 'cidade_nome' => 'Barro Alto', 'cidade_uf' => 'BA'],
            ['cidade_id' => 550, 'estado_id' => 9, 'cidade_nome' => 'Barro Alto', 'cidade_uf' => 'GO'],
            ['cidade_id' => 551, 'estado_id' => 18, 'cidade_nome' => 'Barro Duro', 'cidade_uf' => 'PI'],
            ['cidade_id' => 552, 'estado_id' => 5, 'cidade_nome' => 'Barro Preto', 'cidade_uf' => 'BA'],
            ['cidade_id' => 553, 'estado_id' => 5, 'cidade_nome' => 'Barrocas', 'cidade_uf' => 'BA'],
            ['cidade_id' => 554, 'estado_id' => 27, 'cidade_nome' => 'Barrolândia', 'cidade_uf' => 'TO'],
            ['cidade_id' => 555, 'estado_id' => 6, 'cidade_nome' => 'Barroquinha', 'cidade_uf' => 'CE'],
            ['cidade_id' => 556, 'estado_id' => 21, 'cidade_nome' => 'Barros Cassal', 'cidade_uf' => 'RS'],
            ['cidade_id' => 557, 'estado_id' => 13, 'cidade_nome' => 'Barroso', 'cidade_uf' => 'MG'],
            ['cidade_id' => 558, 'estado_id' => 25, 'cidade_nome' => 'Barueri', 'cidade_uf' => 'SP'],
            ['cidade_id' => 559, 'estado_id' => 25, 'cidade_nome' => 'Bastos', 'cidade_uf' => 'SP'],
            ['cidade_id' => 560, 'estado_id' => 12, 'cidade_nome' => 'Bataguassu', 'cidade_uf' => 'MS'],
            ['cidade_id' => 561, 'estado_id' => 2, 'cidade_nome' => 'Batalha', 'cidade_uf' => 'AL'],
            ['cidade_id' => 562, 'estado_id' => 18, 'cidade_nome' => 'Batalha', 'cidade_uf' => 'PI'],
            ['cidade_id' => 563, 'estado_id' => 25, 'cidade_nome' => 'Batatais', 'cidade_uf' => 'SP'],
            ['cidade_id' => 564, 'estado_id' => 12, 'cidade_nome' => 'Batayporã', 'cidade_uf' => 'MS'],
            ['cidade_id' => 565, 'estado_id' => 6, 'cidade_nome' => 'Baturité', 'cidade_uf' => 'CE'],
            ['cidade_id' => 566, 'estado_id' => 25, 'cidade_nome' => 'Bauru', 'cidade_uf' => 'SP'],
            ['cidade_id' => 567, 'estado_id' => 15, 'cidade_nome' => 'Bayeux', 'cidade_uf' => 'PB'],
            ['cidade_id' => 568, 'estado_id' => 25, 'cidade_nome' => 'Bebedouro', 'cidade_uf' => 'SP'],
            ['cidade_id' => 569, 'estado_id' => 6, 'cidade_nome' => 'Beberibe', 'cidade_uf' => 'CE'],
            ['cidade_id' => 570, 'estado_id' => 6, 'cidade_nome' => 'Bela Cruz', 'cidade_uf' => 'CE'],
            ['cidade_id' => 571, 'estado_id' => 12, 'cidade_nome' => 'Bela Vista', 'cidade_uf' => 'MS'],
            ['cidade_id' => 572, 'estado_id' => 16, 'cidade_nome' => 'Bela Vista da Caroba', 'cidade_uf' => 'PR'],
            ['cidade_id' => 573, 'estado_id' => 9, 'cidade_nome' => 'Bela Vista de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 574, 'estado_id' => 13, 'cidade_nome' => 'Bela Vista de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 575, 'estado_id' => 10, 'cidade_nome' => 'Bela Vista do Maranhão', 'cidade_uf' => 'MA'],
            ['cidade_id' => 576, 'estado_id' => 16, 'cidade_nome' => 'Bela Vista do Paraíso', 'cidade_uf' => 'PR'],
            ['cidade_id' => 577, 'estado_id' => 18, 'cidade_nome' => 'Bela Vista do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 578, 'estado_id' => 24, 'cidade_nome' => 'Bela Vista do Toldo', 'cidade_uf' => 'SC'],
            ['cidade_id' => 579, 'estado_id' => 10, 'cidade_nome' => 'Belágua', 'cidade_uf' => 'MA'],
            ['cidade_id' => 580, 'estado_id' => 2, 'cidade_nome' => 'Belém', 'cidade_uf' => 'AL'],
            ['cidade_id' => 581, 'estado_id' => 14, 'cidade_nome' => 'Belém', 'cidade_uf' => 'PA'],
            ['cidade_id' => 582, 'estado_id' => 15, 'cidade_nome' => 'Belém', 'cidade_uf' => 'PB'],
            ['cidade_id' => 583, 'estado_id' => 17, 'cidade_nome' => 'Belém de Maria', 'cidade_uf' => 'PE'],
            ['cidade_id' => 584, 'estado_id' => 15, 'cidade_nome' => 'Belém do Brejo do Cruz', 'cidade_uf' => 'PB'],
            ['cidade_id' => 585, 'estado_id' => 18, 'cidade_nome' => 'Belém do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 586, 'estado_id' => 17, 'cidade_nome' => 'Belém do São Francisco', 'cidade_uf' => 'PE'],
            ['cidade_id' => 587, 'estado_id' => 19, 'cidade_nome' => 'Belford Roxo', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 588, 'estado_id' => 13, 'cidade_nome' => 'Belmiro Braga', 'cidade_uf' => 'MG'],
            ['cidade_id' => 589, 'estado_id' => 5, 'cidade_nome' => 'Belmonte', 'cidade_uf' => 'BA'],
            ['cidade_id' => 590, 'estado_id' => 24, 'cidade_nome' => 'Belmonte', 'cidade_uf' => 'SC'],
            ['cidade_id' => 591, 'estado_id' => 5, 'cidade_nome' => 'Belo Campo', 'cidade_uf' => 'BA'],
            ['cidade_id' => 592, 'estado_id' => 13, 'cidade_nome' => 'Belo Horizonte', 'cidade_uf' => 'MG'],
            ['cidade_id' => 593, 'estado_id' => 17, 'cidade_nome' => 'Belo Jardim', 'cidade_uf' => 'PE'],
            ['cidade_id' => 594, 'estado_id' => 2, 'cidade_nome' => 'Belo Monte', 'cidade_uf' => 'AL'],
            ['cidade_id' => 595, 'estado_id' => 13, 'cidade_nome' => 'Belo Oriente', 'cidade_uf' => 'MG'],
            ['cidade_id' => 596, 'estado_id' => 13, 'cidade_nome' => 'Belo Vale', 'cidade_uf' => 'MG'],
            ['cidade_id' => 597, 'estado_id' => 14, 'cidade_nome' => 'Belterra', 'cidade_uf' => 'PA'],
            ['cidade_id' => 598, 'estado_id' => 18, 'cidade_nome' => 'Beneditinos', 'cidade_uf' => 'PI'],
            ['cidade_id' => 599, 'estado_id' => 10, 'cidade_nome' => 'Benedito Leite', 'cidade_uf' => 'MA'],
            ['cidade_id' => 600, 'estado_id' => 24, 'cidade_nome' => 'Benedito Novo', 'cidade_uf' => 'SC'],
            ['cidade_id' => 601, 'estado_id' => 14, 'cidade_nome' => 'Benevides', 'cidade_uf' => 'PA'],
            ['cidade_id' => 602, 'estado_id' => 4, 'cidade_nome' => 'Benjamin Constant', 'cidade_uf' => 'AM'],
            ['cidade_id' => 603, 'estado_id' => 21, 'cidade_nome' => 'Benjamin Constant do Sul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 604, 'estado_id' => 25, 'cidade_nome' => 'Bento de Abreu', 'cidade_uf' => 'SP'],
            ['cidade_id' => 605, 'estado_id' => 20, 'cidade_nome' => 'Bento Fernandes', 'cidade_uf' => 'RN'],
            ['cidade_id' => 606, 'estado_id' => 21, 'cidade_nome' => 'Bento Gonçalves', 'cidade_uf' => 'RS'],
            ['cidade_id' => 607, 'estado_id' => 10, 'cidade_nome' => 'Bequimão', 'cidade_uf' => 'MA'],
            ['cidade_id' => 608, 'estado_id' => 13, 'cidade_nome' => 'Berilo', 'cidade_uf' => 'MG'],
            ['cidade_id' => 609, 'estado_id' => 13, 'cidade_nome' => 'Berizal', 'cidade_uf' => 'MG'],
            ['cidade_id' => 610, 'estado_id' => 15, 'cidade_nome' => 'Bernardino Batista', 'cidade_uf' => 'PB'],
            ['cidade_id' => 611, 'estado_id' => 25, 'cidade_nome' => 'Bernardino de Campos', 'cidade_uf' => 'SP'],
            ['cidade_id' => 612, 'estado_id' => 10, 'cidade_nome' => 'Bernardo do Mearim', 'cidade_uf' => 'MA'],
            ['cidade_id' => 613, 'estado_id' => 27, 'cidade_nome' => 'Bernardo Sayão', 'cidade_uf' => 'TO'],
            ['cidade_id' => 614, 'estado_id' => 25, 'cidade_nome' => 'Bertioga', 'cidade_uf' => 'SP'],
            ['cidade_id' => 615, 'estado_id' => 18, 'cidade_nome' => 'Bertolínia', 'cidade_uf' => 'PI'],
            ['cidade_id' => 616, 'estado_id' => 13, 'cidade_nome' => 'Bertópolis', 'cidade_uf' => 'MG'],
            ['cidade_id' => 617, 'estado_id' => 4, 'cidade_nome' => 'Beruri', 'cidade_uf' => 'AM'],
            ['cidade_id' => 618, 'estado_id' => 17, 'cidade_nome' => 'Betânia', 'cidade_uf' => 'PE'],
            ['cidade_id' => 619, 'estado_id' => 18, 'cidade_nome' => 'Betânia do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 620, 'estado_id' => 13, 'cidade_nome' => 'Betim', 'cidade_uf' => 'MG'],
            ['cidade_id' => 621, 'estado_id' => 17, 'cidade_nome' => 'Bezerros', 'cidade_uf' => 'PE'],
            ['cidade_id' => 622, 'estado_id' => 13, 'cidade_nome' => 'Bias Fortes', 'cidade_uf' => 'MG'],
            ['cidade_id' => 623, 'estado_id' => 13, 'cidade_nome' => 'Bicas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 624, 'estado_id' => 24, 'cidade_nome' => 'Biguaçu', 'cidade_uf' => 'SC'],
            ['cidade_id' => 625, 'estado_id' => 25, 'cidade_nome' => 'Bilac', 'cidade_uf' => 'SP'],
            ['cidade_id' => 626, 'estado_id' => 13, 'cidade_nome' => 'Biquinhas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 627, 'estado_id' => 25, 'cidade_nome' => 'Birigui', 'cidade_uf' => 'SP'],
            ['cidade_id' => 628, 'estado_id' => 25, 'cidade_nome' => 'Biritiba-Mirim', 'cidade_uf' => 'SP'],
            ['cidade_id' => 629, 'estado_id' => 5, 'cidade_nome' => 'Biritinga', 'cidade_uf' => 'BA'],
            ['cidade_id' => 630, 'estado_id' => 16, 'cidade_nome' => 'Bituruna', 'cidade_uf' => 'PR'],
            ['cidade_id' => 631, 'estado_id' => 24, 'cidade_nome' => 'Blumenau', 'cidade_uf' => 'SC'],
            ['cidade_id' => 632, 'estado_id' => 8, 'cidade_nome' => 'Boa Esperança', 'cidade_uf' => 'ES'],
            ['cidade_id' => 633, 'estado_id' => 13, 'cidade_nome' => 'Boa Esperança', 'cidade_uf' => 'MG'],
            ['cidade_id' => 634, 'estado_id' => 16, 'cidade_nome' => 'Boa Esperança', 'cidade_uf' => 'PR'],
            ['cidade_id' => 635, 'estado_id' => 16, 'cidade_nome' => 'Boa Esperança do Iguaçu', 'cidade_uf' => 'PR'],
            ['cidade_id' => 636, 'estado_id' => 25, 'cidade_nome' => 'Boa Esperança do Sul', 'cidade_uf' => 'SP'],
            ['cidade_id' => 637, 'estado_id' => 18, 'cidade_nome' => 'Boa Hora', 'cidade_uf' => 'PI'],
            ['cidade_id' => 638, 'estado_id' => 5, 'cidade_nome' => 'Boa Nova', 'cidade_uf' => 'BA'],
            ['cidade_id' => 639, 'estado_id' => 15, 'cidade_nome' => 'Boa Ventura', 'cidade_uf' => 'PB'],
            ['cidade_id' => 640, 'estado_id' => 16, 'cidade_nome' => 'Boa Ventura de São Roque', 'cidade_uf' => 'PR'],
            ['cidade_id' => 641, 'estado_id' => 6, 'cidade_nome' => 'Boa Viagem', 'cidade_uf' => 'CE'],
            ['cidade_id' => 642, 'estado_id' => 15, 'cidade_nome' => 'Boa Vista', 'cidade_uf' => 'PB'],
            ['cidade_id' => 643, 'estado_id' => 23, 'cidade_nome' => 'Boa Vista', 'cidade_uf' => 'RR'],
            ['cidade_id' => 644, 'estado_id' => 16, 'cidade_nome' => 'Boa Vista da Aparecida', 'cidade_uf' => 'PR'],
            ['cidade_id' => 645, 'estado_id' => 21, 'cidade_nome' => 'Boa Vista das Missões', 'cidade_uf' => 'RS'],
            ['cidade_id' => 646, 'estado_id' => 21, 'cidade_nome' => 'Boa Vista do Buricá', 'cidade_uf' => 'RS'],
            ['cidade_id' => 647, 'estado_id' => 21, 'cidade_nome' => 'Boa Vista do Cadeado', 'cidade_uf' => 'RS'],
            ['cidade_id' => 648, 'estado_id' => 10, 'cidade_nome' => 'Boa Vista do Gurupi', 'cidade_uf' => 'MA'],
            ['cidade_id' => 649, 'estado_id' => 21, 'cidade_nome' => 'Boa Vista do Incra', 'cidade_uf' => 'RS'],
            ['cidade_id' => 650, 'estado_id' => 4, 'cidade_nome' => 'Boa Vista do Ramos', 'cidade_uf' => 'AM'],
            ['cidade_id' => 651, 'estado_id' => 21, 'cidade_nome' => 'Boa Vista do Sul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 652, 'estado_id' => 5, 'cidade_nome' => 'Boa Vista do Tupim', 'cidade_uf' => 'BA'],
            ['cidade_id' => 653, 'estado_id' => 2, 'cidade_nome' => 'Boca da Mata', 'cidade_uf' => 'AL'],
            ['cidade_id' => 654, 'estado_id' => 4, 'cidade_nome' => 'Boca do Acre', 'cidade_uf' => 'AM'],
            ['cidade_id' => 655, 'estado_id' => 18, 'cidade_nome' => 'Bocaina', 'cidade_uf' => 'PI'],
            ['cidade_id' => 656, 'estado_id' => 25, 'cidade_nome' => 'Bocaina', 'cidade_uf' => 'SP'],
            ['cidade_id' => 657, 'estado_id' => 13, 'cidade_nome' => 'Bocaina de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 658, 'estado_id' => 24, 'cidade_nome' => 'Bocaina do Sul', 'cidade_uf' => 'SC'],
            ['cidade_id' => 659, 'estado_id' => 13, 'cidade_nome' => 'Bocaiúva', 'cidade_uf' => 'MG'],
            ['cidade_id' => 660, 'estado_id' => 16, 'cidade_nome' => 'Bocaiúva do Sul', 'cidade_uf' => 'PR'],
            ['cidade_id' => 661, 'estado_id' => 20, 'cidade_nome' => 'Bodó', 'cidade_uf' => 'RN'],
            ['cidade_id' => 662, 'estado_id' => 17, 'cidade_nome' => 'Bodocó', 'cidade_uf' => 'PE'],
            ['cidade_id' => 663, 'estado_id' => 12, 'cidade_nome' => 'Bodoquena', 'cidade_uf' => 'MS'],
            ['cidade_id' => 664, 'estado_id' => 25, 'cidade_nome' => 'Bofete', 'cidade_uf' => 'SP'],
            ['cidade_id' => 665, 'estado_id' => 25, 'cidade_nome' => 'Boituva', 'cidade_uf' => 'SP'],
            ['cidade_id' => 666, 'estado_id' => 17, 'cidade_nome' => 'Bom Conselho', 'cidade_uf' => 'PE'],
            ['cidade_id' => 667, 'estado_id' => 13, 'cidade_nome' => 'Bom Despacho', 'cidade_uf' => 'MG'],
            ['cidade_id' => 668, 'estado_id' => 10, 'cidade_nome' => 'Bom Jardim', 'cidade_uf' => 'MA'],
            ['cidade_id' => 669, 'estado_id' => 17, 'cidade_nome' => 'Bom Jardim', 'cidade_uf' => 'PE'],
            ['cidade_id' => 670, 'estado_id' => 19, 'cidade_nome' => 'Bom Jardim', 'cidade_uf' => 'RJ'],            
            ['cidade_id' => 671, 'estado_id' => 24, 'cidade_nome' => 'Bom Jardim da Serra', 'cidade_uf' => 'SC'],
            ['cidade_id' => 672, 'estado_id' => 9, 'cidade_nome' => 'Bom Jardim de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 673, 'estado_id' => 13, 'cidade_nome' => 'Bom Jardim de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 674, 'estado_id' => 15, 'cidade_nome' => 'Bom Jesus', 'cidade_uf' => 'PB'],
            ['cidade_id' => 675, 'estado_id' => 18, 'cidade_nome' => 'Bom Jesus', 'cidade_uf' => 'PI'],
            ['cidade_id' => 676, 'estado_id' => 20, 'cidade_nome' => 'Bom Jesus', 'cidade_uf' => 'RN'],
            ['cidade_id' => 677, 'estado_id' => 21, 'cidade_nome' => 'Bom Jesus', 'cidade_uf' => 'RS'],
            ['cidade_id' => 678, 'estado_id' => 24, 'cidade_nome' => 'Bom Jesus', 'cidade_uf' => 'SC'],
            ['cidade_id' => 679, 'estado_id' => 5, 'cidade_nome' => 'Bom Jesus da Lapa', 'cidade_uf' => 'BA'],
            ['cidade_id' => 680, 'estado_id' => 13, 'cidade_nome' => 'Bom Jesus da Penha', 'cidade_uf' => 'MG'],
            ['cidade_id' => 681, 'estado_id' => 5, 'cidade_nome' => 'Bom Jesus da Serra', 'cidade_uf' => 'BA'],
            ['cidade_id' => 682, 'estado_id' => 10, 'cidade_nome' => 'Bom Jesus das Selvas', 'cidade_uf' => 'MA'],
            ['cidade_id' => 683, 'estado_id' => 9, 'cidade_nome' => 'Bom Jesus de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 684, 'estado_id' => 13, 'cidade_nome' => 'Bom Jesus do Amparo', 'cidade_uf' => 'MG'],
            ['cidade_id' => 685, 'estado_id' => 11, 'cidade_nome' => 'Bom Jesus do Araguaia', 'cidade_uf' => 'MT'],
            ['cidade_id' => 686, 'estado_id' => 13, 'cidade_nome' => 'Bom Jesus do Galho', 'cidade_uf' => 'MG'],
            ['cidade_id' => 687, 'estado_id' => 19, 'cidade_nome' => 'Bom Jesus do Itabapoana', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 688, 'estado_id' => 8, 'cidade_nome' => 'Bom Jesus do Norte', 'cidade_uf' => 'ES'],
            ['cidade_id' => 689, 'estado_id' => 24, 'cidade_nome' => 'Bom Jesus do Oeste', 'cidade_uf' => 'SC'],
            ['cidade_id' => 690, 'estado_id' => 16, 'cidade_nome' => 'Bom Jesus do Sul', 'cidade_uf' => 'PR'],
            ['cidade_id' => 691, 'estado_id' => 14, 'cidade_nome' => 'Bom Jesus do Tocantins', 'cidade_uf' => 'PA'],
            ['cidade_id' => 692, 'estado_id' => 27, 'cidade_nome' => 'Bom Jesus do Tocantins', 'cidade_uf' => 'TO'],
            ['cidade_id' => 693, 'estado_id' => 25, 'cidade_nome' => 'Bom Jesus dos Perdões', 'cidade_uf' => 'SP'],
            ['cidade_id' => 694, 'estado_id' => 10, 'cidade_nome' => 'Bom Lugar', 'cidade_uf' => 'MA'],
            ['cidade_id' => 695, 'estado_id' => 21, 'cidade_nome' => 'Bom Princípio', 'cidade_uf' => 'RS'],
            ['cidade_id' => 696, 'estado_id' => 18, 'cidade_nome' => 'Bom Princípio do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 697, 'estado_id' => 21, 'cidade_nome' => 'Bom Progresso', 'cidade_uf' => 'RS'],
            ['cidade_id' => 698, 'estado_id' => 13, 'cidade_nome' => 'Bom Repouso', 'cidade_uf' => 'MG'],
            ['cidade_id' => 699, 'estado_id' => 24, 'cidade_nome' => 'Bom Retiro', 'cidade_uf' => 'SC'],
            ['cidade_id' => 700, 'estado_id' => 21, 'cidade_nome' => 'Bom Retiro do Sul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 701, 'estado_id' => 13, 'cidade_nome' => 'Bom Sucesso', 'cidade_uf' => 'MG'],
            ['cidade_id' => 702, 'estado_id' => 15, 'cidade_nome' => 'Bom Sucesso', 'cidade_uf' => 'PB'],
            ['cidade_id' => 703, 'estado_id' => 16, 'cidade_nome' => 'Bom Sucesso', 'cidade_uf' => 'PR'],
            ['cidade_id' => 704, 'estado_id' => 25, 'cidade_nome' => 'Bom Sucesso de Itararé', 'cidade_uf' => 'SP'],
            ['cidade_id' => 705, 'estado_id' => 16, 'cidade_nome' => 'Bom Sucesso do Sul', 'cidade_uf' => 'PR'],
            ['cidade_id' => 706, 'estado_id' => 24, 'cidade_nome' => 'Bombinhas', 'cidade_uf' => 'SC'],
            ['cidade_id' => 707, 'estado_id' => 13, 'cidade_nome' => 'Bonfim', 'cidade_uf' => 'MG'],
            ['cidade_id' => 708, 'estado_id' => 23, 'cidade_nome' => 'Bonfim', 'cidade_uf' => 'RR'],
            ['cidade_id' => 709, 'estado_id' => 18, 'cidade_nome' => 'Bonfim do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 710, 'estado_id' => 9, 'cidade_nome' => 'Bonfinópolis', 'cidade_uf' => 'GO'],
            ['cidade_id' => 711, 'estado_id' => 13, 'cidade_nome' => 'Bonfinópolis de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 712, 'estado_id' => 5, 'cidade_nome' => 'Boninal', 'cidade_uf' => 'BA'],
            ['cidade_id' => 713, 'estado_id' => 5, 'cidade_nome' => 'Bonito', 'cidade_uf' => 'BA'],
            ['cidade_id' => 714, 'estado_id' => 12, 'cidade_nome' => 'Bonito', 'cidade_uf' => 'MS'],
            ['cidade_id' => 715, 'estado_id' => 14, 'cidade_nome' => 'Bonito', 'cidade_uf' => 'PA'],
            ['cidade_id' => 716, 'estado_id' => 17, 'cidade_nome' => 'Bonito', 'cidade_uf' => 'PE'],
            ['cidade_id' => 717, 'estado_id' => 13, 'cidade_nome' => 'Bonito de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 718, 'estado_id' => 15, 'cidade_nome' => 'Bonito de Santa Fé', 'cidade_uf' => 'PB'],
            ['cidade_id' => 719, 'estado_id' => 9, 'cidade_nome' => 'Bonópolis', 'cidade_uf' => 'GO'],
            ['cidade_id' => 720, 'estado_id' => 15, 'cidade_nome' => 'Boqueirão', 'cidade_uf' => 'PB'],
            ['cidade_id' => 721, 'estado_id' => 21, 'cidade_nome' => 'Boqueirão do Leão', 'cidade_uf' => 'RS'],
            ['cidade_id' => 722, 'estado_id' => 18, 'cidade_nome' => 'Boqueirão do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 723, 'estado_id' => 26, 'cidade_nome' => 'Boquim', 'cidade_uf' => 'SE'],
            ['cidade_id' => 724, 'estado_id' => 5, 'cidade_nome' => 'Boquira', 'cidade_uf' => 'BA'],
            ['cidade_id' => 725, 'estado_id' => 25, 'cidade_nome' => 'Borá', 'cidade_uf' => 'SP'],
            ['cidade_id' => 726, 'estado_id' => 25, 'cidade_nome' => 'Boracéia', 'cidade_uf' => 'SP'],
            ['cidade_id' => 727, 'estado_id' => 4, 'cidade_nome' => 'Borba', 'cidade_uf' => 'AM'],
            ['cidade_id' => 728, 'estado_id' => 15, 'cidade_nome' => 'Borborema', 'cidade_uf' => 'PB'],
            ['cidade_id' => 729, 'estado_id' => 25, 'cidade_nome' => 'Borborema', 'cidade_uf' => 'SP'],
            ['cidade_id' => 730, 'estado_id' => 13, 'cidade_nome' => 'Borda da Mata', 'cidade_uf' => 'MG'],
            ['cidade_id' => 731, 'estado_id' => 25, 'cidade_nome' => 'Borebi', 'cidade_uf' => 'SP'],
            ['cidade_id' => 732, 'estado_id' => 16, 'cidade_nome' => 'Borrazópolis', 'cidade_uf' => 'PR'],
            ['cidade_id' => 733, 'estado_id' => 21, 'cidade_nome' => 'Bossoroca', 'cidade_uf' => 'RS'],
            ['cidade_id' => 734, 'estado_id' => 13, 'cidade_nome' => 'Botelhos', 'cidade_uf' => 'MG'],
            ['cidade_id' => 735, 'estado_id' => 25, 'cidade_nome' => 'Botucatu', 'cidade_uf' => 'SP'],
            ['cidade_id' => 736, 'estado_id' => 13, 'cidade_nome' => 'Botumirim', 'cidade_uf' => 'MG'],
            ['cidade_id' => 737, 'estado_id' => 5, 'cidade_nome' => 'Botuporã', 'cidade_uf' => 'BA'],
            ['cidade_id' => 738, 'estado_id' => 24, 'cidade_nome' => 'Botuverá', 'cidade_uf' => 'SC'],
            ['cidade_id' => 739, 'estado_id' => 21, 'cidade_nome' => 'Bozano', 'cidade_uf' => 'RS'],
            ['cidade_id' => 740, 'estado_id' => 24, 'cidade_nome' => 'Braço do Norte', 'cidade_uf' => 'SC'],
            ['cidade_id' => 741, 'estado_id' => 24, 'cidade_nome' => 'Braço do Trombudo', 'cidade_uf' => 'SC'],
            ['cidade_id' => 742, 'estado_id' => 21, 'cidade_nome' => 'Braga', 'cidade_uf' => 'RS'],
            ['cidade_id' => 743, 'estado_id' => 14, 'cidade_nome' => 'Bragança', 'cidade_uf' => 'PA'],
            ['cidade_id' => 744, 'estado_id' => 25, 'cidade_nome' => 'Bragança Paulista', 'cidade_uf' => 'SP'],
            ['cidade_id' => 745, 'estado_id' => 16, 'cidade_nome' => 'Braganey', 'cidade_uf' => 'PR'],
            ['cidade_id' => 746, 'estado_id' => 2, 'cidade_nome' => 'Branquinha', 'cidade_uf' => 'AL'],
            ['cidade_id' => 747, 'estado_id' => 13, 'cidade_nome' => 'Brás Pires', 'cidade_uf' => 'MG'],
            ['cidade_id' => 748, 'estado_id' => 14, 'cidade_nome' => 'Brasil Novo', 'cidade_uf' => 'PA'],
            ['cidade_id' => 749, 'estado_id' => 12, 'cidade_nome' => 'Brasilândia', 'cidade_uf' => 'MS'],
            ['cidade_id' => 750, 'estado_id' => 13, 'cidade_nome' => 'Brasilândia de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 751, 'estado_id' => 16, 'cidade_nome' => 'Brasilândia do Sul', 'cidade_uf' => 'PR'],
            ['cidade_id' => 752, 'estado_id' => 27, 'cidade_nome' => 'Brasilândia do Tocantins', 'cidade_uf' => 'TO'],
            ['cidade_id' => 753, 'estado_id' => 1, 'cidade_nome' => 'Brasiléia', 'cidade_uf' => 'AC'],
            ['cidade_id' => 754, 'estado_id' => 18, 'cidade_nome' => 'Brasileira', 'cidade_uf' => 'PI'],
            ['cidade_id' => 755, 'estado_id' => 7, 'cidade_nome' => 'Brasília', 'cidade_uf' => 'DF'],
            ['cidade_id' => 756, 'estado_id' => 13, 'cidade_nome' => 'Brasília de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 757, 'estado_id' => 11, 'cidade_nome' => 'Brasnorte', 'cidade_uf' => 'MT'],
            ['cidade_id' => 758, 'estado_id' => 13, 'cidade_nome' => 'Brasópolis', 'cidade_uf' => 'MG'],
            ['cidade_id' => 759, 'estado_id' => 25, 'cidade_nome' => 'Braúna', 'cidade_uf' => 'SP'],
            ['cidade_id' => 760, 'estado_id' => 13, 'cidade_nome' => 'Braúnas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 761, 'estado_id' => 9, 'cidade_nome' => 'Brazabrantes', 'cidade_uf' => 'GO'],
            ['cidade_id' => 762, 'estado_id' => 17, 'cidade_nome' => 'Brejão', 'cidade_uf' => 'PE'],
            ['cidade_id' => 763, 'estado_id' => 8, 'cidade_nome' => 'Brejetuba', 'cidade_uf' => 'ES'],
            ['cidade_id' => 764, 'estado_id' => 17, 'cidade_nome' => 'Brejinho', 'cidade_uf' => 'PE'],
            ['cidade_id' => 765, 'estado_id' => 20, 'cidade_nome' => 'Brejinho', 'cidade_uf' => 'RN'],
            ['cidade_id' => 766, 'estado_id' => 27, 'cidade_nome' => 'Brejinho de Nazaré', 'cidade_uf' => 'TO'],
            ['cidade_id' => 767, 'estado_id' => 10, 'cidade_nome' => 'Brejo', 'cidade_uf' => 'MA'],
            ['cidade_id' => 768, 'estado_id' => 25, 'cidade_nome' => 'Brejo Alegre', 'cidade_uf' => 'SP'],
            ['cidade_id' => 769, 'estado_id' => 17, 'cidade_nome' => 'Brejo da Madre de Deus', 'cidade_uf' => 'PE'],
            ['cidade_id' => 770, 'estado_id' => 10, 'cidade_nome' => 'Brejo de Areia', 'cidade_uf' => 'MA'],
            ['cidade_id' => 771, 'estado_id' => 15, 'cidade_nome' => 'Brejo do Cruz', 'cidade_uf' => 'PB'],
            ['cidade_id' => 772, 'estado_id' => 18, 'cidade_nome' => 'Brejo do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 773, 'estado_id' => 15, 'cidade_nome' => 'Brejo dos Santos', 'cidade_uf' => 'PB'],
            ['cidade_id' => 774, 'estado_id' => 26, 'cidade_nome' => 'Brejo Grande', 'cidade_uf' => 'SE'],
            ['cidade_id' => 775, 'estado_id' => 14, 'cidade_nome' => 'Brejo Grande do Araguaia', 'cidade_uf' => 'PA'],
            ['cidade_id' => 776, 'estado_id' => 6, 'cidade_nome' => 'Brejo Santo', 'cidade_uf' => 'CE'],
            ['cidade_id' => 777, 'estado_id' => 5, 'cidade_nome' => 'Brejões', 'cidade_uf' => 'BA'],
            ['cidade_id' => 778, 'estado_id' => 5, 'cidade_nome' => 'Brejolândia', 'cidade_uf' => 'BA'],
            ['cidade_id' => 779, 'estado_id' => 14, 'cidade_nome' => 'Breu Branco', 'cidade_uf' => 'PA'],
            ['cidade_id' => 780, 'estado_id' => 14, 'cidade_nome' => 'Breves', 'cidade_uf' => 'PA'],
            ['cidade_id' => 781, 'estado_id' => 9, 'cidade_nome' => 'Britânia', 'cidade_uf' => 'GO'],
            ['cidade_id' => 782, 'estado_id' => 21, 'cidade_nome' => 'Brochier', 'cidade_uf' => 'RS'],
            ['cidade_id' => 783, 'estado_id' => 25, 'cidade_nome' => 'Brodowski', 'cidade_uf' => 'SP'],
            ['cidade_id' => 784, 'estado_id' => 25, 'cidade_nome' => 'Brotas', 'cidade_uf' => 'SP'],
            ['cidade_id' => 785, 'estado_id' => 5, 'cidade_nome' => 'Brotas de Macaúbas', 'cidade_uf' => 'BA'],
            ['cidade_id' => 786, 'estado_id' => 13, 'cidade_nome' => 'Brumadinho', 'cidade_uf' => 'MG'],
            ['cidade_id' => 787, 'estado_id' => 5, 'cidade_nome' => 'Brumado', 'cidade_uf' => 'BA'],
            ['cidade_id' => 788, 'estado_id' => 24, 'cidade_nome' => 'Brunópolis', 'cidade_uf' => 'SC'],
            ['cidade_id' => 789, 'estado_id' => 24, 'cidade_nome' => 'Brusque', 'cidade_uf' => 'SC'],
            ['cidade_id' => 790, 'estado_id' => 13, 'cidade_nome' => 'Bueno Brandão', 'cidade_uf' => 'MG'],
            ['cidade_id' => 791, 'estado_id' => 13, 'cidade_nome' => 'Buenópolis', 'cidade_uf' => 'MG'],
            ['cidade_id' => 792, 'estado_id' => 17, 'cidade_nome' => 'Buenos Aires', 'cidade_uf' => 'PE'],
            ['cidade_id' => 793, 'estado_id' => 5, 'cidade_nome' => 'Buerarema', 'cidade_uf' => 'BA'],
            ['cidade_id' => 794, 'estado_id' => 13, 'cidade_nome' => 'Bugre', 'cidade_uf' => 'MG'],
            ['cidade_id' => 795, 'estado_id' => 17, 'cidade_nome' => 'Buíque', 'cidade_uf' => 'PE'],
            ['cidade_id' => 796, 'estado_id' => 1, 'cidade_nome' => 'Bujari', 'cidade_uf' => 'AC'],
            ['cidade_id' => 797, 'estado_id' => 14, 'cidade_nome' => 'Bujaru', 'cidade_uf' => 'PA'],
            ['cidade_id' => 798, 'estado_id' => 25, 'cidade_nome' => 'Buri', 'cidade_uf' => 'SP'],
            ['cidade_id' => 799, 'estado_id' => 25, 'cidade_nome' => 'Buritama', 'cidade_uf' => 'SP'],
            ['cidade_id' => 800, 'estado_id' => 10, 'cidade_nome' => 'Buriti', 'cidade_uf' => 'MA'],
            ['cidade_id' => 801, 'estado_id' => 9, 'cidade_nome' => 'Buriti Alegre', 'cidade_uf' => 'GO'],
            ['cidade_id' => 802, 'estado_id' => 10, 'cidade_nome' => 'Buriti Bravo', 'cidade_uf' => 'MA'],
            ['cidade_id' => 803, 'estado_id' => 9, 'cidade_nome' => 'Buriti de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 804, 'estado_id' => 27, 'cidade_nome' => 'Buriti do Tocantins', 'cidade_uf' => 'TO'],
            ['cidade_id' => 805, 'estado_id' => 18, 'cidade_nome' => 'Buriti dos Lopes', 'cidade_uf' => 'PI'],
            ['cidade_id' => 806, 'estado_id' => 18, 'cidade_nome' => 'Buriti dos Montes', 'cidade_uf' => 'PI'],
            ['cidade_id' => 807, 'estado_id' => 10, 'cidade_nome' => 'Buriticupu', 'cidade_uf' => 'MA'],
            ['cidade_id' => 808, 'estado_id' => 9, 'cidade_nome' => 'Buritinópolis', 'cidade_uf' => 'GO'],
            ['cidade_id' => 809, 'estado_id' => 5, 'cidade_nome' => 'Buritirama', 'cidade_uf' => 'BA'],
            ['cidade_id' => 810, 'estado_id' => 10, 'cidade_nome' => 'Buritirana', 'cidade_uf' => 'MA'],
            ['cidade_id' => 811, 'estado_id' => 13, 'cidade_nome' => 'Buritis', 'cidade_uf' => 'MG'],
            ['cidade_id' => 812, 'estado_id' => 22, 'cidade_nome' => 'Buritis', 'cidade_uf' => 'RO'],
            ['cidade_id' => 813, 'estado_id' => 25, 'cidade_nome' => 'Buritizal', 'cidade_uf' => 'SP'],
            ['cidade_id' => 814, 'estado_id' => 13, 'cidade_nome' => 'Buritizeiro', 'cidade_uf' => 'MG'],
            ['cidade_id' => 815, 'estado_id' => 21, 'cidade_nome' => 'Butiá', 'cidade_uf' => 'RS'],
            ['cidade_id' => 816, 'estado_id' => 4, 'cidade_nome' => 'Caapiranga', 'cidade_uf' => 'AM'],
            ['cidade_id' => 817, 'estado_id' => 15, 'cidade_nome' => 'Caaporã', 'cidade_uf' => 'PB'],
            ['cidade_id' => 818, 'estado_id' => 12, 'cidade_nome' => 'Caarapó', 'cidade_uf' => 'MS'],
            ['cidade_id' => 819, 'estado_id' => 5, 'cidade_nome' => 'Caatiba', 'cidade_uf' => 'BA'],
            ['cidade_id' => 820, 'estado_id' => 15, 'cidade_nome' => 'Cabaceiras', 'cidade_uf' => 'PB'],
            ['cidade_id' => 821, 'estado_id' => 5, 'cidade_nome' => 'Cabaceiras do Paraguaçu', 'cidade_uf' => 'BA'],
            ['cidade_id' => 822, 'estado_id' => 13, 'cidade_nome' => 'Cabeceira Grande', 'cidade_uf' => 'MG'],
            ['cidade_id' => 823, 'estado_id' => 9, 'cidade_nome' => 'Cabeceiras', 'cidade_uf' => 'GO'],
            ['cidade_id' => 824, 'estado_id' => 18, 'cidade_nome' => 'Cabeceiras do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 825, 'estado_id' => 15, 'cidade_nome' => 'Cabedelo', 'cidade_uf' => 'PB'],
            ['cidade_id' => 826, 'estado_id' => 22, 'cidade_nome' => 'Cabixi', 'cidade_uf' => 'RO'],
            ['cidade_id' => 827, 'estado_id' => 17, 'cidade_nome' => 'Cabo de Santo Agostinho', 'cidade_uf' => 'PE'],
            ['cidade_id' => 828, 'estado_id' => 19, 'cidade_nome' => 'Cabo Frio', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 829, 'estado_id' => 13, 'cidade_nome' => 'Cabo Verde', 'cidade_uf' => 'MG'],
            ['cidade_id' => 830, 'estado_id' => 25, 'cidade_nome' => 'Cabrália Paulista', 'cidade_uf' => 'SP'],
            ['cidade_id' => 831, 'estado_id' => 25, 'cidade_nome' => 'Cabreúva', 'cidade_uf' => 'SP'],
            ['cidade_id' => 832, 'estado_id' => 17, 'cidade_nome' => 'Cabrobó', 'cidade_uf' => 'PE'],
            ['cidade_id' => 833, 'estado_id' => 24, 'cidade_nome' => 'Caçador', 'cidade_uf' => 'SC'],
            ['cidade_id' => 834, 'estado_id' => 25, 'cidade_nome' => 'Caçapava', 'cidade_uf' => 'SP'],
            ['cidade_id' => 835, 'estado_id' => 21, 'cidade_nome' => 'Caçapava do Sul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 836, 'estado_id' => 22, 'cidade_nome' => 'Cacaulândia', 'cidade_uf' => 'RO'],
            ['cidade_id' => 837, 'estado_id' => 21, 'cidade_nome' => 'Cacequi', 'cidade_uf' => 'RS'],
            ['cidade_id' => 838, 'estado_id' => 11, 'cidade_nome' => 'Cáceres', 'cidade_uf' => 'MT'],
            ['cidade_id' => 839, 'estado_id' => 5, 'cidade_nome' => 'Cachoeira', 'cidade_uf' => 'BA'],
            ['cidade_id' => 840, 'estado_id' => 9, 'cidade_nome' => 'Cachoeira Alta', 'cidade_uf' => 'GO'],
            ['cidade_id' => 841, 'estado_id' => 13, 'cidade_nome' => 'Cachoeira da Prata', 'cidade_uf' => 'MG'],
            ['cidade_id' => 842, 'estado_id' => 9, 'cidade_nome' => 'Cachoeira de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 843, 'estado_id' => 13, 'cidade_nome' => 'Cachoeira de Minas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 844, 'estado_id' => 13, 'cidade_nome' => 'Cachoeira de Pajeú', 'cidade_uf' => 'MG'],
            ['cidade_id' => 845, 'estado_id' => 14, 'cidade_nome' => 'Cachoeira do Arari', 'cidade_uf' => 'PA'],
            ['cidade_id' => 846, 'estado_id' => 14, 'cidade_nome' => 'Cachoeira do Piriá', 'cidade_uf' => 'PA'],
            ['cidade_id' => 847, 'estado_id' => 21, 'cidade_nome' => 'Cachoeira do Sul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 848, 'estado_id' => 15, 'cidade_nome' => 'Cachoeira dos Índios', 'cidade_uf' => 'PB'],
            ['cidade_id' => 849, 'estado_id' => 9, 'cidade_nome' => 'Cachoeira Dourada', 'cidade_uf' => 'GO'],
            ['cidade_id' => 850, 'estado_id' => 13, 'cidade_nome' => 'Cachoeira Dourada', 'cidade_uf' => 'MG'],
            ['cidade_id' => 851, 'estado_id' => 10, 'cidade_nome' => 'Cachoeira Grande', 'cidade_uf' => 'MA'],
            ['cidade_id' => 852, 'estado_id' => 25, 'cidade_nome' => 'Cachoeira Paulista', 'cidade_uf' => 'SP'],
            ['cidade_id' => 853, 'estado_id' => 19, 'cidade_nome' => 'Cachoeiras de Macacu', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 854, 'estado_id' => 17, 'cidade_nome' => 'Cachoeirinha', 'cidade_uf' => 'PE'],
            ['cidade_id' => 855, 'estado_id' => 21, 'cidade_nome' => 'Cachoeirinha', 'cidade_uf' => 'RS'],
            ['cidade_id' => 856, 'estado_id' => 27, 'cidade_nome' => 'Cachoeirinha', 'cidade_uf' => 'TO'],
            ['cidade_id' => 857, 'estado_id' => 8, 'cidade_nome' => 'Cachoeiro de Itapemirim', 'cidade_uf' => 'ES'],
            ['cidade_id' => 858, 'estado_id' => 15, 'cidade_nome' => 'Cacimba de Areia', 'cidade_uf' => 'PB'],
            ['cidade_id' => 859, 'estado_id' => 15, 'cidade_nome' => 'Cacimba de Dentro', 'cidade_uf' => 'PB'],
            ['cidade_id' => 860, 'estado_id' => 15, 'cidade_nome' => 'Cacimbas', 'cidade_uf' => 'PB'],
            ['cidade_id' => 861, 'estado_id' => 2, 'cidade_nome' => 'Cacimbinhas', 'cidade_uf' => 'AL'],
            ['cidade_id' => 862, 'estado_id' => 21, 'cidade_nome' => 'Cacique Doble', 'cidade_uf' => 'RS'],
            ['cidade_id' => 863, 'estado_id' => 22, 'cidade_nome' => 'Cacoal', 'cidade_uf' => 'RO'],
            ['cidade_id' => 864, 'estado_id' => 25, 'cidade_nome' => 'Caconde', 'cidade_uf' => 'SP'],
            ['cidade_id' => 865, 'estado_id' => 9, 'cidade_nome' => 'Caçu', 'cidade_uf' => 'GO'],
            ['cidade_id' => 866, 'estado_id' => 5, 'cidade_nome' => 'Caculé', 'cidade_uf' => 'BA'],
            ['cidade_id' => 867, 'estado_id' => 5, 'cidade_nome' => 'Caém', 'cidade_uf' => 'BA'],
            ['cidade_id' => 868, 'estado_id' => 13, 'cidade_nome' => 'Caetanópolis', 'cidade_uf' => 'MG'],
            ['cidade_id' => 869, 'estado_id' => 5, 'cidade_nome' => 'Caetanos', 'cidade_uf' => 'BA'],
            ['cidade_id' => 870, 'estado_id' => 13, 'cidade_nome' => 'Caeté', 'cidade_uf' => 'MG'],
            ['cidade_id' => 871, 'estado_id' => 17, 'cidade_nome' => 'Caetés', 'cidade_uf' => 'PE'],
            ['cidade_id' => 872, 'estado_id' => 5, 'cidade_nome' => 'Caetité', 'cidade_uf' => 'BA'],
            ['cidade_id' => 873, 'estado_id' => 5, 'cidade_nome' => 'Cafarnaum', 'cidade_uf' => 'BA'],
            ['cidade_id' => 874, 'estado_id' => 16, 'cidade_nome' => 'Cafeara', 'cidade_uf' => 'PR'],
            ['cidade_id' => 875, 'estado_id' => 16, 'cidade_nome' => 'Cafelândia', 'cidade_uf' => 'PR'],
            ['cidade_id' => 876, 'estado_id' => 25, 'cidade_nome' => 'Cafelândia', 'cidade_uf' => 'SP'],
            ['cidade_id' => 877, 'estado_id' => 16, 'cidade_nome' => 'Cafezal do Sul', 'cidade_uf' => 'PR'],
            ['cidade_id' => 878, 'estado_id' => 25, 'cidade_nome' => 'Caiabu', 'cidade_uf' => 'SP'],
            ['cidade_id' => 879, 'estado_id' => 13, 'cidade_nome' => 'Caiana', 'cidade_uf' => 'MG'],
            ['cidade_id' => 880, 'estado_id' => 9, 'cidade_nome' => 'Caiapônia', 'cidade_uf' => 'GO'],
            ['cidade_id' => 881, 'estado_id' => 21, 'cidade_nome' => 'Caibaté', 'cidade_uf' => 'RS'],
            ['cidade_id' => 882, 'estado_id' => 24, 'cidade_nome' => 'Caibi', 'cidade_uf' => 'SC'],
            ['cidade_id' => 883, 'estado_id' => 15, 'cidade_nome' => 'Caiçara', 'cidade_uf' => 'PB'],
            ['cidade_id' => 884, 'estado_id' => 21, 'cidade_nome' => 'Caiçara', 'cidade_uf' => 'RS'],
            ['cidade_id' => 885, 'estado_id' => 20, 'cidade_nome' => 'Caiçara do Norte', 'cidade_uf' => 'RN'],
            ['cidade_id' => 886, 'estado_id' => 20, 'cidade_nome' => 'Caiçara do Rio do Vento', 'cidade_uf' => 'RN'],
            ['cidade_id' => 887, 'estado_id' => 20, 'cidade_nome' => 'Caicó', 'cidade_uf' => 'RN'],
            ['cidade_id' => 888, 'estado_id' => 25, 'cidade_nome' => 'Caieiras', 'cidade_uf' => 'SP'],
            ['cidade_id' => 889, 'estado_id' => 5, 'cidade_nome' => 'Cairu', 'cidade_uf' => 'BA'],
            ['cidade_id' => 890, 'estado_id' => 25, 'cidade_nome' => 'Caiuá', 'cidade_uf' => 'SP'],
            ['cidade_id' => 891, 'estado_id' => 25, 'cidade_nome' => 'Cajamar', 'cidade_uf' => 'SP'],
            ['cidade_id' => 892, 'estado_id' => 10, 'cidade_nome' => 'Cajapió', 'cidade_uf' => 'MA'],
            ['cidade_id' => 893, 'estado_id' => 10, 'cidade_nome' => 'Cajari', 'cidade_uf' => 'MA'],
            ['cidade_id' => 894, 'estado_id' => 25, 'cidade_nome' => 'Cajati', 'cidade_uf' => 'SP'],
            ['cidade_id' => 895, 'estado_id' => 15, 'cidade_nome' => 'Cajazeiras', 'cidade_uf' => 'PB'],
            ['cidade_id' => 896, 'estado_id' => 18, 'cidade_nome' => 'Cajazeiras do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 897, 'estado_id' => 15, 'cidade_nome' => 'Cajazeirinhas', 'cidade_uf' => 'PB'],
            ['cidade_id' => 898, 'estado_id' => 25, 'cidade_nome' => 'Cajobi', 'cidade_uf' => 'SP'],
            ['cidade_id' => 899, 'estado_id' => 2, 'cidade_nome' => 'Cajueiro', 'cidade_uf' => 'AL'],
            ['cidade_id' => 900, 'estado_id' => 18, 'cidade_nome' => 'Cajueiro da Praia', 'cidade_uf' => 'PI'],
            ['cidade_id' => 901, 'estado_id' => 13, 'cidade_nome' => 'Cajuri', 'cidade_uf' => 'MG'],
            ['cidade_id' => 902, 'estado_id' => 25, 'cidade_nome' => 'Cajuru', 'cidade_uf' => 'SP'],
            ['cidade_id' => 903, 'estado_id' => 17, 'cidade_nome' => 'Calçado', 'cidade_uf' => 'PE'],
            ['cidade_id' => 904, 'estado_id' => 3, 'cidade_nome' => 'Calçoene', 'cidade_uf' => 'AP'],
            ['cidade_id' => 905, 'estado_id' => 13, 'cidade_nome' => 'Caldas', 'cidade_uf' => 'MG'],
            ['cidade_id' => 906, 'estado_id' => 15, 'cidade_nome' => 'Caldas Brandão', 'cidade_uf' => 'PB'],
            ['cidade_id' => 907, 'estado_id' => 9, 'cidade_nome' => 'Caldas Novas', 'cidade_uf' => 'GO'],
            ['cidade_id' => 908, 'estado_id' => 9, 'cidade_nome' => 'Caldazinha', 'cidade_uf' => 'GO'],
            ['cidade_id' => 909, 'estado_id' => 5, 'cidade_nome' => 'Caldeirão Grande', 'cidade_uf' => 'BA'],
            ['cidade_id' => 910, 'estado_id' => 18, 'cidade_nome' => 'Caldeirão Grande do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 911, 'estado_id' => 16, 'cidade_nome' => 'Califórnia', 'cidade_uf' => 'PR'],
            ['cidade_id' => 912, 'estado_id' => 24, 'cidade_nome' => 'Calmon', 'cidade_uf' => 'SC'],
            ['cidade_id' => 913, 'estado_id' => 17, 'cidade_nome' => 'Calumbi', 'cidade_uf' => 'PE'],
            ['cidade_id' => 914, 'estado_id' => 5, 'cidade_nome' => 'Camacan', 'cidade_uf' => 'BA'],
            ['cidade_id' => 915, 'estado_id' => 5, 'cidade_nome' => 'Camaçari', 'cidade_uf' => 'BA'],
            ['cidade_id' => 916, 'estado_id' => 13, 'cidade_nome' => 'Camacho', 'cidade_uf' => 'MG'],
            ['cidade_id' => 917, 'estado_id' => 15, 'cidade_nome' => 'Camalaú', 'cidade_uf' => 'PB'],
            ['cidade_id' => 918, 'estado_id' => 5, 'cidade_nome' => 'Camamu', 'cidade_uf' => 'BA'],
            ['cidade_id' => 919, 'estado_id' => 13, 'cidade_nome' => 'Camanducaia', 'cidade_uf' => 'MG'],
            ['cidade_id' => 920, 'estado_id' => 12, 'cidade_nome' => 'Camapuã', 'cidade_uf' => 'MS'],
            ['cidade_id' => 921, 'estado_id' => 21, 'cidade_nome' => 'Camaquã', 'cidade_uf' => 'RS'],
            ['cidade_id' => 922, 'estado_id' => 17, 'cidade_nome' => 'Camaragibe', 'cidade_uf' => 'PE'],
            ['cidade_id' => 923, 'estado_id' => 21, 'cidade_nome' => 'Camargo', 'cidade_uf' => 'RS'],
            ['cidade_id' => 924, 'estado_id' => 16, 'cidade_nome' => 'Cambará', 'cidade_uf' => 'PR'],
            ['cidade_id' => 925, 'estado_id' => 21, 'cidade_nome' => 'Cambará do Sul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 926, 'estado_id' => 16, 'cidade_nome' => 'Cambé', 'cidade_uf' => 'PR'],
            ['cidade_id' => 927, 'estado_id' => 16, 'cidade_nome' => 'Cambira', 'cidade_uf' => 'PR'],
            ['cidade_id' => 928, 'estado_id' => 24, 'cidade_nome' => 'Camboriú', 'cidade_uf' => 'SC'],
            ['cidade_id' => 929, 'estado_id' => 19, 'cidade_nome' => 'Cambuci', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 930, 'estado_id' => 13, 'cidade_nome' => 'Cambuí', 'cidade_uf' => 'MG'],
            ['cidade_id' => 931, 'estado_id' => 13, 'cidade_nome' => 'Cambuquira', 'cidade_uf' => 'MG'],
            ['cidade_id' => 932, 'estado_id' => 14, 'cidade_nome' => 'Cametá', 'cidade_uf' => 'PA'],
            ['cidade_id' => 933, 'estado_id' => 6, 'cidade_nome' => 'Camocim', 'cidade_uf' => 'CE'],
            ['cidade_id' => 934, 'estado_id' => 17, 'cidade_nome' => 'Camocim de São Félix', 'cidade_uf' => 'PE'],
            ['cidade_id' => 935, 'estado_id' => 13, 'cidade_nome' => 'Campanário', 'cidade_uf' => 'MG'],
            ['cidade_id' => 936, 'estado_id' => 13, 'cidade_nome' => 'Campanha', 'cidade_uf' => 'MG'],
            ['cidade_id' => 937, 'estado_id' => 2, 'cidade_nome' => 'Campestre', 'cidade_uf' => 'AL'],
            ['cidade_id' => 938, 'estado_id' => 13, 'cidade_nome' => 'Campestre', 'cidade_uf' => 'MG'],
            ['cidade_id' => 939, 'estado_id' => 21, 'cidade_nome' => 'Campestre da Serra', 'cidade_uf' => 'RS'],
            ['cidade_id' => 940, 'estado_id' => 9, 'cidade_nome' => 'Campestre de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 941, 'estado_id' => 10, 'cidade_nome' => 'Campestre do Maranhão', 'cidade_uf' => 'MA'],
            ['cidade_id' => 942, 'estado_id' => 16, 'cidade_nome' => 'Campina da Lagoa', 'cidade_uf' => 'PR'],
            ['cidade_id' => 943, 'estado_id' => 21, 'cidade_nome' => 'Campina das Missões', 'cidade_uf' => 'RS'],
            ['cidade_id' => 944, 'estado_id' => 25, 'cidade_nome' => 'Campina do Monte Alegre', 'cidade_uf' => 'SP'],
            ['cidade_id' => 945, 'estado_id' => 16, 'cidade_nome' => 'Campina do Simão', 'cidade_uf' => 'PR'],
            ['cidade_id' => 946, 'estado_id' => 15, 'cidade_nome' => 'Campina Grande', 'cidade_uf' => 'PB'],
            ['cidade_id' => 947, 'estado_id' => 16, 'cidade_nome' => 'Campina Grande do Sul', 'cidade_uf' => 'PR'],
            ['cidade_id' => 948, 'estado_id' => 13, 'cidade_nome' => 'Campina Verde', 'cidade_uf' => 'MG'],
            ['cidade_id' => 949, 'estado_id' => 9, 'cidade_nome' => 'Campinaçu', 'cidade_uf' => 'GO'],
            ['cidade_id' => 950, 'estado_id' => 11, 'cidade_nome' => 'Campinápolis', 'cidade_uf' => 'MT'],
            ['cidade_id' => 951, 'estado_id' => 25, 'cidade_nome' => 'Campinas', 'cidade_uf' => 'SP'],
            ['cidade_id' => 952, 'estado_id' => 18, 'cidade_nome' => 'Campinas do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 953, 'estado_id' => 21, 'cidade_nome' => 'Campinas do Sul', 'cidade_uf' => 'RS'],
            ['cidade_id' => 954, 'estado_id' => 9, 'cidade_nome' => 'Campinorte', 'cidade_uf' => 'GO'],
            ['cidade_id' => 955, 'estado_id' => 2, 'cidade_nome' => 'Campo Alegre', 'cidade_uf' => 'AL'],
            ['cidade_id' => 956, 'estado_id' => 24, 'cidade_nome' => 'Campo Alegre', 'cidade_uf' => 'SC'],
            ['cidade_id' => 957, 'estado_id' => 9, 'cidade_nome' => 'Campo Alegre de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 958, 'estado_id' => 5, 'cidade_nome' => 'Campo Alegre de Lourdes', 'cidade_uf' => 'BA'],
            ['cidade_id' => 959, 'estado_id' => 18, 'cidade_nome' => 'Campo Alegre do Fidalgo', 'cidade_uf' => 'PI'],
            ['cidade_id' => 960, 'estado_id' => 13, 'cidade_nome' => 'Campo Azul', 'cidade_uf' => 'MG'],
            ['cidade_id' => 961, 'estado_id' => 13, 'cidade_nome' => 'Campo Belo', 'cidade_uf' => 'MG'],
            ['cidade_id' => 962, 'estado_id' => 24, 'cidade_nome' => 'Campo Belo do Sul', 'cidade_uf' => 'SC'],
            ['cidade_id' => 963, 'estado_id' => 21, 'cidade_nome' => 'Campo Bom', 'cidade_uf' => 'RS'],
            ['cidade_id' => 964, 'estado_id' => 16, 'cidade_nome' => 'Campo Bonito', 'cidade_uf' => 'PR'],
            ['cidade_id' => 965, 'estado_id' => 26, 'cidade_nome' => 'Campo do Brito', 'cidade_uf' => 'SE'],
            ['cidade_id' => 966, 'estado_id' => 13, 'cidade_nome' => 'Campo do Meio', 'cidade_uf' => 'MG'],
            ['cidade_id' => 967, 'estado_id' => 16, 'cidade_nome' => 'Campo do Tenente', 'cidade_uf' => 'PR'],
            ['cidade_id' => 968, 'estado_id' => 24, 'cidade_nome' => 'Campo Erê', 'cidade_uf' => 'SC'],
            ['cidade_id' => 969, 'estado_id' => 13, 'cidade_nome' => 'Campo Florido', 'cidade_uf' => 'MG'],
            ['cidade_id' => 970, 'estado_id' => 5, 'cidade_nome' => 'Campo Formoso', 'cidade_uf' => 'BA'],
            ['cidade_id' => 971, 'estado_id' => 2, 'cidade_nome' => 'Campo Grande', 'cidade_uf' => 'AL'],
            ['cidade_id' => 972, 'estado_id' => 12, 'cidade_nome' => 'Campo Grande', 'cidade_uf' => 'MS'],
            ['cidade_id' => 973, 'estado_id' => 18, 'cidade_nome' => 'Campo Grande do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 974, 'estado_id' => 16, 'cidade_nome' => 'Campo Largo', 'cidade_uf' => 'PR'],
            ['cidade_id' => 975, 'estado_id' => 18, 'cidade_nome' => 'Campo Largo do Piauí', 'cidade_uf' => 'PI'],
            ['cidade_id' => 976, 'estado_id' => 9, 'cidade_nome' => 'Campo Limpo de Goiás', 'cidade_uf' => 'GO'],
            ['cidade_id' => 977, 'estado_id' => 25, 'cidade_nome' => 'Campo Limpo Paulista', 'cidade_uf' => 'SP'],
            ['cidade_id' => 978, 'estado_id' => 16, 'cidade_nome' => 'Campo Magro', 'cidade_uf' => 'PR'],
            ['cidade_id' => 979, 'estado_id' => 18, 'cidade_nome' => 'Campo Maior', 'cidade_uf' => 'PI'],
            ['cidade_id' => 980, 'estado_id' => 16, 'cidade_nome' => 'Campo Mourão', 'cidade_uf' => 'PR'],
            ['cidade_id' => 981, 'estado_id' => 21, 'cidade_nome' => 'Campo Novo', 'cidade_uf' => 'RS'],
            ['cidade_id' => 982, 'estado_id' => 22, 'cidade_nome' => 'Campo Novo de Rondônia', 'cidade_uf' => 'RO'],
            ['cidade_id' => 983, 'estado_id' => 11, 'cidade_nome' => 'Campo Novo do Parecis', 'cidade_uf' => 'MT'],
            ['cidade_id' => 984, 'estado_id' => 20, 'cidade_nome' => 'Campo Redondo', 'cidade_uf' => 'RN'],
            ['cidade_id' => 985, 'estado_id' => 11, 'cidade_nome' => 'Campo Verde', 'cidade_uf' => 'MT'],
            ['cidade_id' => 986, 'estado_id' => 13, 'cidade_nome' => 'Campos Altos', 'cidade_uf' => 'MG'],
            ['cidade_id' => 987, 'estado_id' => 9, 'cidade_nome' => 'Campos Belos', 'cidade_uf' => 'GO'],
            ['cidade_id' => 988, 'estado_id' => 21, 'cidade_nome' => 'Campos Borges', 'cidade_uf' => 'RS'],
            ['cidade_id' => 989, 'estado_id' => 11, 'cidade_nome' => 'Campos de Júlio', 'cidade_uf' => 'MT'],
            ['cidade_id' => 990, 'estado_id' => 25, 'cidade_nome' => 'Campos do Jordão', 'cidade_uf' => 'SP'],
            ['cidade_id' => 991, 'estado_id' => 19, 'cidade_nome' => 'Campos dos Goytacazes', 'cidade_uf' => 'RJ'],
            ['cidade_id' => 992, 'estado_id' => 13, 'cidade_nome' => 'Campos Gerais', 'cidade_uf' => 'MG'],
            ['cidade_id' => 993, 'estado_id' => 27, 'cidade_nome' => 'Campos Lindos', 'cidade_uf' => 'TO'],
            ['cidade_id' => 994, 'estado_id' => 24, 'cidade_nome' => 'Campos Novos', 'cidade_uf' => 'SC'],
            ['cidade_id' => 995, 'estado_id' => 25, 'cidade_nome' => 'Campos Novos Paulista', 'cidade_uf' => 'SP'],
            ['cidade_id' => 996, 'estado_id' => 6, 'cidade_nome' => 'Campos Sales', 'cidade_uf' => 'CE'],
            ['cidade_id' => 997, 'estado_id' => 9, 'cidade_nome' => 'Campos Verdes', 'cidade_uf' => 'GO'],
            ['cidade_id' => 998, 'estado_id' => 17, 'cidade_nome' => 'Camutanga', 'cidade_uf' => 'PE'],
            ['cidade_id' => 999, 'estado_id' => 13, 'cidade_nome' => 'Cana Verde', 'cidade_uf' => 'MG'],
            ['cidade_id' => 1000, 'estado_id' => 13, 'cidade_nome' => 'Canaã', 'cidade_uf' => 'MG'],
            ['cidade_id' => 1001, 'estado_id' => 14, 'cidade_nome' => 'Canaã dos Carajás', 'cidade_uf' => 'PA'],
            ['cidade_id' => 1002, 'estado_id' => 11, 'cidade_nome' => 'Canabrava do Norte', 'cidade_uf' => 'MT'],
            ['cidade_id' => 1003, 'estado_id' => 25, 'cidade_nome' => 'Cananéia', 'cidade_uf' => 'SP'],
            ['cidade_id' => 1004, 'estado_id' => 2, 'cidade_nome' => 'Canapi', 'cidade_uf' => 'AL'],
            ['cidade_id' => 1005, 'estado_id' => 5, 'cidade_nome' => 'Canápolis', 'cidade_uf' => 'BA'],
            ['cidade_id' => 1006, 'estado_id' => 13, 'cidade_nome' => 'Canápolis', 'cidade_uf' => 'MG'],
            ['cidade_id' => 1007, 'estado_id' => 5, 'cidade_nome' => 'Canarana', 'cidade_uf' => 'BA'],
            ['cidade_id' => 1008, 'estado_id' => 11, 'cidade_nome' => 'Canarana', 'cidade_uf' => 'MT'],
            ['cidade_id' => 1009, 'estado_id' => 25, 'cidade_nome' => 'Canas', 'cidade_uf' => 'SP'],
            ['cidade_id' => 1010, 'estado_id' => 18, 'cidade_nome' => 'Canavieira', 'cidade_uf' => 'PI'],
            INSERT INTO `cidades` VALUES ('1011', '5', 'Canavieiras', 'BA');
            INSERT INTO `cidades` VALUES ('1012', '5', 'Candeal', 'BA');
            INSERT INTO `cidades` VALUES ('1013', '5', 'Candeias', 'BA');
            INSERT INTO `cidades` VALUES ('1014', '13', 'Candeias', 'MG');
            INSERT INTO `cidades` VALUES ('1015', '22', 'Candeias do Jamari', 'RO');
            INSERT INTO `cidades` VALUES ('1016', '21', 'Candelária', 'RS');
            INSERT INTO `cidades` VALUES ('1017', '5', 'Candiba', 'BA');
            INSERT INTO `cidades` VALUES ('1018', '16', 'Cândido de Abreu', 'PR');
            INSERT INTO `cidades` VALUES ('1019', '21', 'Cândido Godói', 'RS');
            INSERT INTO `cidades` VALUES ('1020', '10', 'Cândido Mendes', 'MA');
            INSERT INTO `cidades` VALUES ('1021', '25', 'Cândido Mota', 'SP');
            INSERT INTO `cidades` VALUES ('1022', '25', 'Cândido Rodrigues', 'SP');
            INSERT INTO `cidades` VALUES ('1023', '5', 'Cândido Sales', 'BA');
            INSERT INTO `cidades` VALUES ('1024', '21', 'Candiota', 'RS');
            INSERT INTO `cidades` VALUES ('1025', '16', 'Candói', 'PR');
            INSERT INTO `cidades` VALUES ('1026', '21', 'Canela', 'RS');
            INSERT INTO `cidades` VALUES ('1027', '24', 'Canelinha', 'SC');
            INSERT INTO `cidades` VALUES ('1028', '20', 'Canguaretama', 'RN');
            INSERT INTO `cidades` VALUES ('1029', '21', 'Canguçu', 'RS');
            INSERT INTO `cidades` VALUES ('1030', '26', 'Canhoba', 'SE');
            INSERT INTO `cidades` VALUES ('1031', '17', 'Canhotinho', 'PE');
            INSERT INTO `cidades` VALUES ('1032', '6', 'Canindé', 'CE');
            INSERT INTO `cidades` VALUES ('1033', '26', 'Canindé de São Francisco', 'SE');
            INSERT INTO `cidades` VALUES ('1034', '25', 'Canitar', 'SP');
            INSERT INTO `cidades` VALUES ('1035', '21', 'Canoas', 'RS');
            INSERT INTO `cidades` VALUES ('1036', '24', 'Canoinhas', 'SC');
            INSERT INTO `cidades` VALUES ('1037', '5', 'Cansanção', 'BA');
            INSERT INTO `cidades` VALUES ('1038', '23', 'Cantá', 'RR');
            INSERT INTO `cidades` VALUES ('1039', '13', 'Cantagalo', 'MG');
            INSERT INTO `cidades` VALUES ('1040', '16', 'Cantagalo', 'PR');
            INSERT INTO `cidades` VALUES ('1041', '19', 'Cantagalo', 'RJ');
            INSERT INTO `cidades` VALUES ('1042', '10', 'Cantanhede', 'MA');
            INSERT INTO `cidades` VALUES ('1043', '18', 'Canto do Buriti', 'PI');
            INSERT INTO `cidades` VALUES ('1044', '5', 'Canudos', 'BA');
            INSERT INTO `cidades` VALUES ('1045', '21', 'Canudos do Vale', 'RS');
            INSERT INTO `cidades` VALUES ('1046', '4', 'Canutama', 'AM');
            INSERT INTO `cidades` VALUES ('1047', '14', 'Capanema', 'PA');
            INSERT INTO `cidades` VALUES ('1048', '16', 'Capanema', 'PR');
            INSERT INTO `cidades` VALUES ('1049', '24', 'Capão Alto', 'SC');
            INSERT INTO `cidades` VALUES ('1050', '25', 'Capão Bonito', 'SP');
            INSERT INTO `cidades` VALUES ('1051', '21', 'Capão Bonito do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1052', '21', 'Capão da Canoa', 'RS');
            INSERT INTO `cidades` VALUES ('1053', '21', 'Capão do Cipó', 'RS');
            INSERT INTO `cidades` VALUES ('1054', '21', 'Capão do Leão', 'RS');
            INSERT INTO `cidades` VALUES ('1055', '13', 'Caparaó', 'MG');
            INSERT INTO `cidades` VALUES ('1056', '2', 'Capela', 'AL');
            INSERT INTO `cidades` VALUES ('1057', '26', 'Capela', 'SE');
            INSERT INTO `cidades` VALUES ('1058', '21', 'Capela de Santana', 'RS');
            INSERT INTO `cidades` VALUES ('1059', '25', 'Capela do Alto', 'SP');
            INSERT INTO `cidades` VALUES ('1060', '5', 'Capela do Alto Alegre', 'BA');
            INSERT INTO `cidades` VALUES ('1061', '13', 'Capela Nova', 'MG');
            INSERT INTO `cidades` VALUES ('1062', '13', 'Capelinha', 'MG');
            INSERT INTO `cidades` VALUES ('1063', '13', 'Capetinga', 'MG');
            INSERT INTO `cidades` VALUES ('1064', '15', 'Capim', 'PB');
            INSERT INTO `cidades` VALUES ('1065', '13', 'Capim Branco', 'MG');
            INSERT INTO `cidades` VALUES ('1066', '5', 'Capim Grosso', 'BA');
            INSERT INTO `cidades` VALUES ('1067', '13', 'Capinópolis', 'MG');
            INSERT INTO `cidades` VALUES ('1068', '24', 'Capinzal', 'SC');
            INSERT INTO `cidades` VALUES ('1069', '10', 'Capinzal do Norte', 'MA');
            INSERT INTO `cidades` VALUES ('1070', '6', 'Capistrano', 'CE');
            INSERT INTO `cidades` VALUES ('1071', '21', 'Capitão', 'RS');
            INSERT INTO `cidades` VALUES ('1072', '13', 'Capitão Andrade', 'MG');
            INSERT INTO `cidades` VALUES ('1073', '18', 'Capitão de Campos', 'PI');
            INSERT INTO `cidades` VALUES ('1074', '13', 'Capitão Enéas', 'MG');
            INSERT INTO `cidades` VALUES ('1075', '18', 'Capitão Gervásio Oliveira', 'PI');
            INSERT INTO `cidades` VALUES ('1076', '16', 'Capitão Leônidas Marques', 'PR');
            INSERT INTO `cidades` VALUES ('1077', '14', 'Capitão Poço', 'PA');
            INSERT INTO `cidades` VALUES ('1078', '13', 'Capitólio', 'MG');
            INSERT INTO `cidades` VALUES ('1079', '25', 'Capivari', 'SP');
            INSERT INTO `cidades` VALUES ('1080', '24', 'Capivari de Baixo', 'SC');
            INSERT INTO `cidades` VALUES ('1081', '21', 'Capivari do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1082', '1', 'Capixaba', 'AC');
            INSERT INTO `cidades` VALUES ('1083', '17', 'Capoeiras', 'PE');
            INSERT INTO `cidades` VALUES ('1084', '13', 'Caputira', 'MG');
            INSERT INTO `cidades` VALUES ('1085', '21', 'Caraá', 'RS');
            INSERT INTO `cidades` VALUES ('1086', '23', 'Caracaraí', 'RR');
            INSERT INTO `cidades` VALUES ('1087', '12', 'Caracol', 'MS');
            INSERT INTO `cidades` VALUES ('1088', '18', 'Caracol', 'PI');
            INSERT INTO `cidades` VALUES ('1089', '25', 'Caraguatatuba', 'SP');
            INSERT INTO `cidades` VALUES ('1090', '13', 'Caraí', 'MG');
            INSERT INTO `cidades` VALUES ('1091', '5', 'Caraíbas', 'BA');
            INSERT INTO `cidades` VALUES ('1092', '16', 'Carambeí', 'PR');
            INSERT INTO `cidades` VALUES ('1093', '13', 'Caranaíba', 'MG');
            INSERT INTO `cidades` VALUES ('1094', '13', 'Carandaí', 'MG');
            INSERT INTO `cidades` VALUES ('1095', '13', 'Carangola', 'MG');
            INSERT INTO `cidades` VALUES ('1096', '19', 'Carapebus', 'RJ');
            INSERT INTO `cidades` VALUES ('1097', '25', 'Carapicuíba', 'SP');
            INSERT INTO `cidades` VALUES ('1098', '13', 'Caratinga', 'MG');
            INSERT INTO `cidades` VALUES ('1099', '4', 'Carauari', 'AM');
            INSERT INTO `cidades` VALUES ('1100', '15', 'Caraúbas', 'PB');
            INSERT INTO `cidades` VALUES ('1101', '20', 'Caraúbas', 'RN');
            INSERT INTO `cidades` VALUES ('1102', '18', 'Caraúbas do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('1103', '5', 'Caravelas', 'BA');
            INSERT INTO `cidades` VALUES ('1104', '21', 'Carazinho', 'RS');
            INSERT INTO `cidades` VALUES ('1105', '13', 'Carbonita', 'MG');
            INSERT INTO `cidades` VALUES ('1106', '5', 'Cardeal da Silva', 'BA');
            INSERT INTO `cidades` VALUES ('1107', '25', 'Cardoso', 'SP');
            INSERT INTO `cidades` VALUES ('1108', '19', 'Cardoso Moreira', 'RJ');
            INSERT INTO `cidades` VALUES ('1109', '13', 'Careaçu', 'MG');
            INSERT INTO `cidades` VALUES ('1110', '4', 'Careiro', 'AM');
            INSERT INTO `cidades` VALUES ('1111', '4', 'Careiro da Várzea', 'AM');
            INSERT INTO `cidades` VALUES ('1112', '8', 'Cariacica', 'ES');
            INSERT INTO `cidades` VALUES ('1113', '6', 'Caridade', 'CE');
            INSERT INTO `cidades` VALUES ('1114', '18', 'Caridade do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('1115', '5', 'Carinhanha', 'BA');
            INSERT INTO `cidades` VALUES ('1116', '26', 'Carira', 'SE');
            INSERT INTO `cidades` VALUES ('1117', '6', 'Cariré', 'CE');
            INSERT INTO `cidades` VALUES ('1118', '27', 'Cariri do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('1119', '6', 'Caririaçu', 'CE');
            INSERT INTO `cidades` VALUES ('1120', '6', 'Cariús', 'CE');
            INSERT INTO `cidades` VALUES ('1121', '11', 'Carlinda', 'MT');
            INSERT INTO `cidades` VALUES ('1122', '16', 'Carlópolis', 'PR');
            INSERT INTO `cidades` VALUES ('1123', '21', 'Carlos Barbosa', 'RS');
            INSERT INTO `cidades` VALUES ('1124', '13', 'Carlos Chagas', 'MG');
            INSERT INTO `cidades` VALUES ('1125', '21', 'Carlos Gomes', 'RS');
            INSERT INTO `cidades` VALUES ('1126', '13', 'Carmésia', 'MG');
            INSERT INTO `cidades` VALUES ('1127', '19', 'Carmo', 'RJ');
            INSERT INTO `cidades` VALUES ('1128', '13', 'Carmo da Cachoeira', 'MG');
            INSERT INTO `cidades` VALUES ('1129', '13', 'Carmo da Mata', 'MG');
            INSERT INTO `cidades` VALUES ('1130', '13', 'Carmo de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('1131', '13', 'Carmo do Cajuru', 'MG');
            INSERT INTO `cidades` VALUES ('1132', '13', 'Carmo do Paranaíba', 'MG');
            INSERT INTO `cidades` VALUES ('1133', '13', 'Carmo do Rio Claro', 'MG');
            INSERT INTO `cidades` VALUES ('1134', '9', 'Carmo do Rio Verde', 'GO');
            INSERT INTO `cidades` VALUES ('1135', '27', 'Carmolândia', 'TO');
            INSERT INTO `cidades` VALUES ('1136', '26', 'Carmópolis', 'SE');
            INSERT INTO `cidades` VALUES ('1137', '13', 'Carmópolis de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('1138', '17', 'Carnaíba', 'PE');
            INSERT INTO `cidades` VALUES ('1139', '20', 'Carnaúba dos Dantas', 'RN');
            INSERT INTO `cidades` VALUES ('1140', '20', 'Carnaubais', 'RN');
            INSERT INTO `cidades` VALUES ('1141', '6', 'Carnaubal', 'CE');
            INSERT INTO `cidades` VALUES ('1142', '17', 'Carnaubeira da Penha', 'PE');
            INSERT INTO `cidades` VALUES ('1143', '13', 'Carneirinho', 'MG');
            INSERT INTO `cidades` VALUES ('1144', '2', 'Carneiros', 'AL');
            INSERT INTO `cidades` VALUES ('1145', '23', 'Caroebe', 'RR');
            INSERT INTO `cidades` VALUES ('1146', '10', 'Carolina', 'MA');
            INSERT INTO `cidades` VALUES ('1147', '17', 'Carpina', 'PE');
            INSERT INTO `cidades` VALUES ('1148', '13', 'Carrancas', 'MG');
            INSERT INTO `cidades` VALUES ('1149', '15', 'Carrapateira', 'PB');
            INSERT INTO `cidades` VALUES ('1150', '27', 'Carrasco Bonito', 'TO');
            INSERT INTO `cidades` VALUES ('1151', '17', 'Caruaru', 'PE');
            INSERT INTO `cidades` VALUES ('1152', '10', 'Carutapera', 'MA');
            INSERT INTO `cidades` VALUES ('1153', '13', 'Carvalhópolis', 'MG');
            INSERT INTO `cidades` VALUES ('1154', '13', 'Carvalhos', 'MG');
            INSERT INTO `cidades` VALUES ('1155', '25', 'Casa Branca', 'SP');
            INSERT INTO `cidades` VALUES ('1156', '13', 'Casa Grande', 'MG');
            INSERT INTO `cidades` VALUES ('1157', '5', 'Casa Nova', 'BA');
            INSERT INTO `cidades` VALUES ('1158', '21', 'Casca', 'RS');
            INSERT INTO `cidades` VALUES ('1159', '13', 'Cascalho Rico', 'MG');
            INSERT INTO `cidades` VALUES ('1160', '6', 'Cascavel', 'CE');
            INSERT INTO `cidades` VALUES ('1161', '16', 'Cascavel', 'PR');
            INSERT INTO `cidades` VALUES ('1162', '27', 'Caseara', 'TO');
            INSERT INTO `cidades` VALUES ('1163', '21', 'Caseiros', 'RS');
            INSERT INTO `cidades` VALUES ('1164', '19', 'Casimiro de Abreu', 'RJ');
            INSERT INTO `cidades` VALUES ('1165', '17', 'Casinhas', 'PE');
            INSERT INTO `cidades` VALUES ('1166', '15', 'Casserengue', 'PB');
            INSERT INTO `cidades` VALUES ('1167', '13', 'Cássia', 'MG');
            INSERT INTO `cidades` VALUES ('1168', '25', 'Cássia dos Coqueiros', 'SP');
            INSERT INTO `cidades` VALUES ('1169', '12', 'Cassilândia', 'MS');
            INSERT INTO `cidades` VALUES ('1170', '14', 'Castanhal', 'PA');
            INSERT INTO `cidades` VALUES ('1171', '11', 'Castanheira', 'MT');
            INSERT INTO `cidades` VALUES ('1172', '22', 'Castanheiras', 'RO');
            INSERT INTO `cidades` VALUES ('1173', '9', 'Castelândia', 'GO');
            INSERT INTO `cidades` VALUES ('1174', '8', 'Castelo', 'ES');
            INSERT INTO `cidades` VALUES ('1175', '18', 'Castelo do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('1176', '25', 'Castilho', 'SP');
            INSERT INTO `cidades` VALUES ('1177', '16', 'Castro', 'PR');
            INSERT INTO `cidades` VALUES ('1178', '5', 'Castro Alves', 'BA');
            INSERT INTO `cidades` VALUES ('1179', '13', 'Cataguases', 'MG');
            INSERT INTO `cidades` VALUES ('1180', '9', 'Catalão', 'GO');
            INSERT INTO `cidades` VALUES ('1181', '25', 'Catanduva', 'SP');
            INSERT INTO `cidades` VALUES ('1182', '16', 'Catanduvas', 'PR');
            INSERT INTO `cidades` VALUES ('1183', '24', 'Catanduvas', 'SC');
            INSERT INTO `cidades` VALUES ('1184', '6', 'Catarina', 'CE');
            INSERT INTO `cidades` VALUES ('1185', '13', 'Catas Altas', 'MG');
            INSERT INTO `cidades` VALUES ('1186', '13', 'Catas Altas da Noruega', 'MG');
            INSERT INTO `cidades` VALUES ('1187', '17', 'Catende', 'PE');
            INSERT INTO `cidades` VALUES ('1188', '25', 'Catiguá', 'SP');
            INSERT INTO `cidades` VALUES ('1189', '15', 'Catingueira', 'PB');
            INSERT INTO `cidades` VALUES ('1190', '5', 'Catolândia', 'BA');
            INSERT INTO `cidades` VALUES ('1191', '15', 'Catolé do Rocha', 'PB');
            INSERT INTO `cidades` VALUES ('1192', '5', 'Catu', 'BA');
            INSERT INTO `cidades` VALUES ('1193', '21', 'Catuípe', 'RS');
            INSERT INTO `cidades` VALUES ('1194', '13', 'Catuji', 'MG');
            INSERT INTO `cidades` VALUES ('1195', '6', 'Catunda', 'CE');
            INSERT INTO `cidades` VALUES ('1196', '9', 'Caturaí', 'GO');
            INSERT INTO `cidades` VALUES ('1197', '5', 'Caturama', 'BA');
            INSERT INTO `cidades` VALUES ('1198', '15', 'Caturité', 'PB');
            INSERT INTO `cidades` VALUES ('1199', '13', 'Catuti', 'MG');
            INSERT INTO `cidades` VALUES ('1200', '6', 'Caucaia', 'CE');
            INSERT INTO `cidades` VALUES ('1201', '9', 'Cavalcante', 'GO');
            INSERT INTO `cidades` VALUES ('1202', '13', 'Caxambu', 'MG');
            INSERT INTO `cidades` VALUES ('1203', '24', 'Caxambu do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('1204', '10', 'Caxias', 'MA');
            INSERT INTO `cidades` VALUES ('1205', '21', 'Caxias do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1206', '18', 'Caxingó', 'PI');
            INSERT INTO `cidades` VALUES ('1207', '20', 'Ceará-Mirim', 'RN');
            INSERT INTO `cidades` VALUES ('1208', '10', 'Cedral', 'MA');
            INSERT INTO `cidades` VALUES ('1209', '25', 'Cedral', 'SP');
            INSERT INTO `cidades` VALUES ('1210', '6', 'Cedro', 'CE');
            INSERT INTO `cidades` VALUES ('1211', '17', 'Cedro', 'PE');
            INSERT INTO `cidades` VALUES ('1212', '26', 'Cedro de São João', 'SE');
            INSERT INTO `cidades` VALUES ('1213', '13', 'Cedro do Abaeté', 'MG');
            INSERT INTO `cidades` VALUES ('1214', '24', 'Celso Ramos', 'SC');
            INSERT INTO `cidades` VALUES ('1215', '21', 'Centenário', 'RS');
            INSERT INTO `cidades` VALUES ('1216', '27', 'Centenário', 'TO');
            INSERT INTO `cidades` VALUES ('1217', '16', 'Centenário do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('1218', '5', 'Central', 'BA');
            INSERT INTO `cidades` VALUES ('1219', '13', 'Central de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('1220', '10', 'Central do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('1221', '13', 'Centralina', 'MG');
            INSERT INTO `cidades` VALUES ('1222', '10', 'Centro do Guilherme', 'MA');
            INSERT INTO `cidades` VALUES ('1223', '10', 'Centro Novo do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('1224', '22', 'Cerejeiras', 'RO');
            INSERT INTO `cidades` VALUES ('1225', '9', 'Ceres', 'GO');
            INSERT INTO `cidades` VALUES ('1226', '25', 'Cerqueira César', 'SP');
            INSERT INTO `cidades` VALUES ('1227', '25', 'Cerquilho', 'SP');
            INSERT INTO `cidades` VALUES ('1228', '21', 'Cerrito', 'RS');
            INSERT INTO `cidades` VALUES ('1229', '16', 'Cerro Azul', 'PR');
            INSERT INTO `cidades` VALUES ('1230', '21', 'Cerro Branco', 'RS');
            INSERT INTO `cidades` VALUES ('1231', '20', 'Cerro Corá', 'RN');
            INSERT INTO `cidades` VALUES ('1232', '21', 'Cerro Grande', 'RS');
            INSERT INTO `cidades` VALUES ('1233', '21', 'Cerro Grande do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1234', '21', 'Cerro Largo', 'RS');
            INSERT INTO `cidades` VALUES ('1235', '24', 'Cerro Negro', 'SC');
            INSERT INTO `cidades` VALUES ('1236', '25', 'Cesário Lange', 'SP');
            INSERT INTO `cidades` VALUES ('1237', '16', 'Céu Azul', 'PR');
            INSERT INTO `cidades` VALUES ('1238', '9', 'Cezarina', 'GO');
            INSERT INTO `cidades` VALUES ('1239', '17', 'Chã de Alegria', 'PE');
            INSERT INTO `cidades` VALUES ('1240', '17', 'Chã Grande', 'PE');
            INSERT INTO `cidades` VALUES ('1241', '2', 'Chã Preta', 'AL');
            INSERT INTO `cidades` VALUES ('1242', '13', 'Chácara', 'MG');
            INSERT INTO `cidades` VALUES ('1243', '13', 'Chalé', 'MG');
            INSERT INTO `cidades` VALUES ('1244', '21', 'Chapada', 'RS');
            INSERT INTO `cidades` VALUES ('1245', '27', 'Chapada da Natividade', 'TO');
            INSERT INTO `cidades` VALUES ('1246', '27', 'Chapada de Areia', 'TO');
            INSERT INTO `cidades` VALUES ('1247', '13', 'Chapada do Norte', 'MG');
            INSERT INTO `cidades` VALUES ('1248', '11', 'Chapada dos Guimarães', 'MT');
            INSERT INTO `cidades` VALUES ('1249', '13', 'Chapada Gaúcha', 'MG');
            INSERT INTO `cidades` VALUES ('1250', '9', 'Chapadão do Céu', 'GO');
            INSERT INTO `cidades` VALUES ('1251', '24', 'Chapadão do Lageado', 'SC');
            INSERT INTO `cidades` VALUES ('1252', '12', 'Chapadão do Sul', 'MS');
            INSERT INTO `cidades` VALUES ('1253', '10', 'Chapadinha', 'MA');
            INSERT INTO `cidades` VALUES ('1254', '24', 'Chapecó', 'SC');
            INSERT INTO `cidades` VALUES ('1255', '25', 'Charqueada', 'SP');
            INSERT INTO `cidades` VALUES ('1256', '21', 'Charqueadas', 'RS');
            INSERT INTO `cidades` VALUES ('1257', '21', 'Charrua', 'RS');
            INSERT INTO `cidades` VALUES ('1258', '6', 'Chaval', 'CE');
            INSERT INTO `cidades` VALUES ('1259', '25', 'Chavantes', 'SP');
            INSERT INTO `cidades` VALUES ('1260', '14', 'Chaves', 'PA');
            INSERT INTO `cidades` VALUES ('1261', '13', 'Chiador', 'MG');
            INSERT INTO `cidades` VALUES ('1262', '21', 'Chiapetta', 'RS');
            INSERT INTO `cidades` VALUES ('1263', '16', 'Chopinzinho', 'PR');
            INSERT INTO `cidades` VALUES ('1264', '6', 'Choró', 'CE');
            INSERT INTO `cidades` VALUES ('1265', '6', 'Chorozinho', 'CE');
            INSERT INTO `cidades` VALUES ('1266', '5', 'Chorrochó', 'BA');
            INSERT INTO `cidades` VALUES ('1267', '21', 'Chuí', 'RS');
            INSERT INTO `cidades` VALUES ('1268', '22', 'Chupinguaia', 'RO');
            INSERT INTO `cidades` VALUES ('1269', '21', 'Chuvisca', 'RS');
            INSERT INTO `cidades` VALUES ('1270', '16', 'Cianorte', 'PR');
            INSERT INTO `cidades` VALUES ('1271', '5', 'Cícero Dantas', 'BA');
            INSERT INTO `cidades` VALUES ('1272', '16', 'Cidade Gaúcha', 'PR');
            INSERT INTO `cidades` VALUES ('1273', '9', 'Cidade Ocidental', 'GO');
            INSERT INTO `cidades` VALUES ('1274', '10', 'Cidelândia', 'MA');
            INSERT INTO `cidades` VALUES ('1275', '21', 'Cidreira', 'RS');
            INSERT INTO `cidades` VALUES ('1276', '5', 'Cipó', 'BA');
            INSERT INTO `cidades` VALUES ('1277', '13', 'Cipotânea', 'MG');
            INSERT INTO `cidades` VALUES ('1278', '21', 'Ciríaco', 'RS');
            INSERT INTO `cidades` VALUES ('1279', '13', 'Claraval', 'MG');
            INSERT INTO `cidades` VALUES ('1280', '13', 'Claro dos Poções', 'MG');
            INSERT INTO `cidades` VALUES ('1281', '11', 'Cláudia', 'MT');
            INSERT INTO `cidades` VALUES ('1282', '13', 'Cláudio', 'MG');
            INSERT INTO `cidades` VALUES ('1283', '25', 'Clementina', 'SP');
            INSERT INTO `cidades` VALUES ('1284', '16', 'Clevelândia', 'PR');
            INSERT INTO `cidades` VALUES ('1285', '5', 'Coaraci', 'BA');
            INSERT INTO `cidades` VALUES ('1286', '4', 'Coari', 'AM');
            INSERT INTO `cidades` VALUES ('1287', '18', 'Cocal', 'PI');
            INSERT INTO `cidades` VALUES ('1288', '18', 'Cocal de Telha', 'PI');
            INSERT INTO `cidades` VALUES ('1289', '24', 'Cocal do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('1290', '18', 'Cocal dos Alves', 'PI');
            INSERT INTO `cidades` VALUES ('1291', '11', 'Cocalinho', 'MT');
            INSERT INTO `cidades` VALUES ('1292', '9', 'Cocalzinho de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('1293', '5', 'Cocos', 'BA');
            INSERT INTO `cidades` VALUES ('1294', '4', 'Codajás', 'AM');
            INSERT INTO `cidades` VALUES ('1295', '10', 'Codó', 'MA');
            INSERT INTO `cidades` VALUES ('1296', '10', 'Coelho Neto', 'MA');
            INSERT INTO `cidades` VALUES ('1297', '13', 'Coimbra', 'MG');
            INSERT INTO `cidades` VALUES ('1298', '2', 'Coité do Nóia', 'AL');
            INSERT INTO `cidades` VALUES ('1299', '18', 'Coivaras', 'PI');
            INSERT INTO `cidades` VALUES ('1300', '14', 'Colares', 'PA');
            INSERT INTO `cidades` VALUES ('1301', '8', 'Colatina', 'ES');
            INSERT INTO `cidades` VALUES ('1302', '11', 'Colíder', 'MT');
            INSERT INTO `cidades` VALUES ('1303', '25', 'Colina', 'SP');
            INSERT INTO `cidades` VALUES ('1304', '10', 'Colinas', 'MA');
            INSERT INTO `cidades` VALUES ('1305', '21', 'Colinas', 'RS');
            INSERT INTO `cidades` VALUES ('1306', '9', 'Colinas do Sul', 'GO');
            INSERT INTO `cidades` VALUES ('1307', '27', 'Colinas do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('1308', '27', 'Colméia', 'TO');
            INSERT INTO `cidades` VALUES ('1309', '11', 'Colniza', 'MT');
            INSERT INTO `cidades` VALUES ('1310', '25', 'Colômbia', 'SP');
            INSERT INTO `cidades` VALUES ('1311', '16', 'Colombo', 'PR');
            INSERT INTO `cidades` VALUES ('1312', '18', 'Colônia do Gurguéia', 'PI');
            INSERT INTO `cidades` VALUES ('1313', '18', 'Colônia do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('1314', '2', 'Colônia Leopoldina', 'AL');
            INSERT INTO `cidades` VALUES ('1315', '16', 'Colorado', 'PR');
            INSERT INTO `cidades` VALUES ('1316', '21', 'Colorado', 'RS');
            INSERT INTO `cidades` VALUES ('1317', '22', 'Colorado do Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('1318', '13', 'Coluna', 'MG');
            INSERT INTO `cidades` VALUES ('1319', '27', 'Combinado', 'TO');
            INSERT INTO `cidades` VALUES ('1320', '13', 'Comendador Gomes', 'MG');
            INSERT INTO `cidades` VALUES ('1321', '19', 'Comendador Levy Gasparian', 'RJ');
            INSERT INTO `cidades` VALUES ('1322', '13', 'Comercinho', 'MG');
            INSERT INTO `cidades` VALUES ('1323', '11', 'Comodoro', 'MT');
            INSERT INTO `cidades` VALUES ('1324', '15', 'Conceição', 'PB');
            INSERT INTO `cidades` VALUES ('1325', '13', 'Conceição da Aparecida', 'MG');
            INSERT INTO `cidades` VALUES ('1326', '8', 'Conceição da Barra', 'ES');
            INSERT INTO `cidades` VALUES ('1327', '13', 'Conceição da Barra de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('1328', '5', 'Conceição da Feira', 'BA');
            INSERT INTO `cidades` VALUES ('1329', '13', 'Conceição das Alagoas', 'MG');
            INSERT INTO `cidades` VALUES ('1330', '13', 'Conceição das Pedras', 'MG');
            INSERT INTO `cidades` VALUES ('1331', '13', 'Conceição de Ipanema', 'MG');
            INSERT INTO `cidades` VALUES ('1332', '19', 'Conceição de Macabu', 'RJ');
            INSERT INTO `cidades` VALUES ('1333', '5', 'Conceição do Almeida', 'BA');
            INSERT INTO `cidades` VALUES ('1334', '14', 'Conceição do Araguaia', 'PA');
            INSERT INTO `cidades` VALUES ('1335', '18', 'Conceição do Canindé', 'PI');
            INSERT INTO `cidades` VALUES ('1336', '8', 'Conceição do Castelo', 'ES');
            INSERT INTO `cidades` VALUES ('1337', '5', 'Conceição do Coité', 'BA');
            INSERT INTO `cidades` VALUES ('1338', '5', 'Conceição do Jacuípe', 'BA');
            INSERT INTO `cidades` VALUES ('1339', '10', 'Conceição do Lago-Açu', 'MA');
            INSERT INTO `cidades` VALUES ('1340', '13', 'Conceição do Mato Dentro', 'MG');
            INSERT INTO `cidades` VALUES ('1341', '13', 'Conceição do Pará', 'MG');
            INSERT INTO `cidades` VALUES ('1342', '13', 'Conceição do Rio Verde', 'MG');
            INSERT INTO `cidades` VALUES ('1343', '27', 'Conceição do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('1344', '13', 'Conceição dos Ouros', 'MG');
            INSERT INTO `cidades` VALUES ('1345', '25', 'Conchal', 'SP');
            INSERT INTO `cidades` VALUES ('1346', '25', 'Conchas', 'SP');
            INSERT INTO `cidades` VALUES ('1347', '24', 'Concórdia', 'SC');
            INSERT INTO `cidades` VALUES ('1348', '14', 'Concórdia do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('1349', '15', 'Condado', 'PB');
            INSERT INTO `cidades` VALUES ('1350', '17', 'Condado', 'PE');
            INSERT INTO `cidades` VALUES ('1351', '5', 'Conde', 'BA');
            INSERT INTO `cidades` VALUES ('1352', '15', 'Conde', 'PB');
            INSERT INTO `cidades` VALUES ('1353', '5', 'Condeúba', 'BA');
            INSERT INTO `cidades` VALUES ('1354', '21', 'Condor', 'RS');
            INSERT INTO `cidades` VALUES ('1355', '13', 'Cônego Marinho', 'MG');
            INSERT INTO `cidades` VALUES ('1356', '13', 'Confins', 'MG');
            INSERT INTO `cidades` VALUES ('1357', '11', 'Confresa', 'MT');
            INSERT INTO `cidades` VALUES ('1358', '15', 'Congo', 'PB');
            INSERT INTO `cidades` VALUES ('1359', '13', 'Congonhal', 'MG');
            INSERT INTO `cidades` VALUES ('1360', '13', 'Congonhas', 'MG');
            INSERT INTO `cidades` VALUES ('1361', '13', 'Congonhas do Norte', 'MG');
            INSERT INTO `cidades` VALUES ('1362', '16', 'Congonhinhas', 'PR');
            INSERT INTO `cidades` VALUES ('1363', '13', 'Conquista', 'MG');
            INSERT INTO `cidades` VALUES ('1364', '11', 'Conquista D\'Oeste', 'MT');
            INSERT INTO `cidades` VALUES ('1365', '13', 'Conselheiro Lafaiete', 'MG');
            INSERT INTO `cidades` VALUES ('1366', '16', 'Conselheiro Mairinck', 'PR');
            INSERT INTO `cidades` VALUES ('1367', '13', 'Conselheiro Pena', 'MG');
            INSERT INTO `cidades` VALUES ('1368', '13', 'Consolação', 'MG');
            INSERT INTO `cidades` VALUES ('1369', '21', 'Constantina', 'RS');
            INSERT INTO `cidades` VALUES ('1370', '13', 'Contagem', 'MG');
            INSERT INTO `cidades` VALUES ('1371', '16', 'Contenda', 'PR');
            INSERT INTO `cidades` VALUES ('1372', '5', 'Contendas do Sincorá', 'BA');
            INSERT INTO `cidades` VALUES ('1373', '13', 'Coqueiral', 'MG');
            INSERT INTO `cidades` VALUES ('1374', '21', 'Coqueiro Baixo', 'RS');
            INSERT INTO `cidades` VALUES ('1375', '2', 'Coqueiro Seco', 'AL');
            INSERT INTO `cidades` VALUES ('1376', '21', 'Coqueiros do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1377', '13', 'Coração de Jesus', 'MG');
            INSERT INTO `cidades` VALUES ('1378', '5', 'Coração de Maria', 'BA');
            INSERT INTO `cidades` VALUES ('1379', '16', 'Corbélia', 'PR');
            INSERT INTO `cidades` VALUES ('1380', '19', 'Cordeiro', 'RJ');
            INSERT INTO `cidades` VALUES ('1381', '25', 'Cordeirópolis', 'SP');
            INSERT INTO `cidades` VALUES ('1382', '5', 'Cordeiros', 'BA');
            INSERT INTO `cidades` VALUES ('1383', '24', 'Cordilheira Alta', 'SC');
            INSERT INTO `cidades` VALUES ('1384', '13', 'Cordisburgo', 'MG');
            INSERT INTO `cidades` VALUES ('1385', '13', 'Cordislândia', 'MG');
            INSERT INTO `cidades` VALUES ('1386', '6', 'Coreaú', 'CE');
            INSERT INTO `cidades` VALUES ('1387', '15', 'Coremas', 'PB');
            INSERT INTO `cidades` VALUES ('1388', '12', 'Corguinho', 'MS');
            INSERT INTO `cidades` VALUES ('1389', '5', 'Coribe', 'BA');
            INSERT INTO `cidades` VALUES ('1390', '13', 'Corinto', 'MG');
            INSERT INTO `cidades` VALUES ('1391', '16', 'Cornélio Procópio', 'PR');
            INSERT INTO `cidades` VALUES ('1392', '13', 'Coroaci', 'MG');
            INSERT INTO `cidades` VALUES ('1393', '25', 'Coroados', 'SP');
            INSERT INTO `cidades` VALUES ('1394', '10', 'Coroatá', 'MA');
            INSERT INTO `cidades` VALUES ('1395', '13', 'Coromandel', 'MG');
            INSERT INTO `cidades` VALUES ('1396', '21', 'Coronel Barros', 'RS');
            INSERT INTO `cidades` VALUES ('1397', '21', 'Coronel Bicaco', 'RS');
            INSERT INTO `cidades` VALUES ('1398', '16', 'Coronel Domingos Soares', 'PR');
            INSERT INTO `cidades` VALUES ('1399', '20', 'Coronel Ezequiel', 'RN');
            INSERT INTO `cidades` VALUES ('1400', '13', 'Coronel Fabriciano', 'MG');
            INSERT INTO `cidades` VALUES ('1401', '24', 'Coronel Freitas', 'SC');
            INSERT INTO `cidades` VALUES ('1402', '20', 'Coronel João Pessoa', 'RN');
            INSERT INTO `cidades` VALUES ('1403', '5', 'Coronel João Sá', 'BA');
            INSERT INTO `cidades` VALUES ('1404', '18', 'Coronel José Dias', 'PI');
            INSERT INTO `cidades` VALUES ('1405', '25', 'Coronel Macedo', 'SP');
            INSERT INTO `cidades` VALUES ('1406', '24', 'Coronel Martins', 'SC');
            INSERT INTO `cidades` VALUES ('1407', '13', 'Coronel Murta', 'MG');
            INSERT INTO `cidades` VALUES ('1408', '13', 'Coronel Pacheco', 'MG');
            INSERT INTO `cidades` VALUES ('1409', '21', 'Coronel Pilar', 'RS');
            INSERT INTO `cidades` VALUES ('1410', '12', 'Coronel Sapucaia', 'MS');
            INSERT INTO `cidades` VALUES ('1411', '16', 'Coronel Vivida', 'PR');
            INSERT INTO `cidades` VALUES ('1412', '13', 'Coronel Xavier Chaves', 'MG');
            INSERT INTO `cidades` VALUES ('1413', '13', 'Córrego Danta', 'MG');
            INSERT INTO `cidades` VALUES ('1414', '13', 'Córrego do Bom Jesus', 'MG');
            INSERT INTO `cidades` VALUES ('1415', '9', 'Córrego do Ouro', 'GO');
            INSERT INTO `cidades` VALUES ('1416', '13', 'Córrego Fundo', 'MG');
            INSERT INTO `cidades` VALUES ('1417', '13', 'Córrego Novo', 'MG');
            INSERT INTO `cidades` VALUES ('1418', '24', 'Correia Pinto', 'SC');
            INSERT INTO `cidades` VALUES ('1419', '18', 'Corrente', 'PI');
            INSERT INTO `cidades` VALUES ('1420', '17', 'Correntes', 'PE');
            INSERT INTO `cidades` VALUES ('1421', '5', 'Correntina', 'BA');
            INSERT INTO `cidades` VALUES ('1422', '17', 'Cortês', 'PE');
            INSERT INTO `cidades` VALUES ('1423', '12', 'Corumbá', 'MS');
            INSERT INTO `cidades` VALUES ('1424', '9', 'Corumbá de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('1425', '9', 'Corumbaíba', 'GO');
            INSERT INTO `cidades` VALUES ('1426', '25', 'Corumbataí', 'SP');
            INSERT INTO `cidades` VALUES ('1427', '16', 'Corumbataí do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('1428', '22', 'Corumbiara', 'RO');
            INSERT INTO `cidades` VALUES ('1429', '24', 'Corupá', 'SC');
            INSERT INTO `cidades` VALUES ('1430', '2', 'Coruripe', 'AL');
            INSERT INTO `cidades` VALUES ('1431', '25', 'Cosmópolis', 'SP');
            INSERT INTO `cidades` VALUES ('1432', '25', 'Cosmorama', 'SP');
            INSERT INTO `cidades` VALUES ('1433', '22', 'Costa Marques', 'RO');
            INSERT INTO `cidades` VALUES ('1434', '12', 'Costa Rica', 'MS');
            INSERT INTO `cidades` VALUES ('1435', '5', 'Cotegipe', 'BA');
            INSERT INTO `cidades` VALUES ('1436', '25', 'Cotia', 'SP');
            INSERT INTO `cidades` VALUES ('1437', '21', 'Cotiporã', 'RS');
            INSERT INTO `cidades` VALUES ('1438', '11', 'Cotriguaçu', 'MT');
            INSERT INTO `cidades` VALUES ('1439', '13', 'Couto de Magalhães de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('1440', '27', 'Couto Magalhães', 'TO');
            INSERT INTO `cidades` VALUES ('1441', '21', 'Coxilha', 'RS');
            INSERT INTO `cidades` VALUES ('1442', '12', 'Coxim', 'MS');
            INSERT INTO `cidades` VALUES ('1443', '15', 'Coxixola', 'PB');
            INSERT INTO `cidades` VALUES ('1444', '2', 'Craíbas', 'AL');
            INSERT INTO `cidades` VALUES ('1445', '6', 'Crateús', 'CE');
            INSERT INTO `cidades` VALUES ('1446', '6', 'Crato', 'CE');
            INSERT INTO `cidades` VALUES ('1447', '25', 'Cravinhos', 'SP');
            INSERT INTO `cidades` VALUES ('1448', '5', 'Cravolândia', 'BA');
            INSERT INTO `cidades` VALUES ('1449', '24', 'Criciúma', 'SC');
            INSERT INTO `cidades` VALUES ('1450', '13', 'Crisólita', 'MG');
            INSERT INTO `cidades` VALUES ('1451', '5', 'Crisópolis', 'BA');
            INSERT INTO `cidades` VALUES ('1452', '21', 'Crissiumal', 'RS');
            INSERT INTO `cidades` VALUES ('1453', '13', 'Cristais', 'MG');
            INSERT INTO `cidades` VALUES ('1454', '25', 'Cristais Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('1455', '21', 'Cristal', 'RS');
            INSERT INTO `cidades` VALUES ('1456', '21', 'Cristal do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1457', '27', 'Cristalândia', 'TO');
            INSERT INTO `cidades` VALUES ('1458', '18', 'Cristalândia do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('1459', '13', 'Cristália', 'MG');
            INSERT INTO `cidades` VALUES ('1460', '9', 'Cristalina', 'GO');
            INSERT INTO `cidades` VALUES ('1461', '13', 'Cristiano Otoni', 'MG');
            INSERT INTO `cidades` VALUES ('1462', '9', 'Cristianópolis', 'GO');
            INSERT INTO `cidades` VALUES ('1463', '13', 'Cristina', 'MG');
            INSERT INTO `cidades` VALUES ('1464', '26', 'Cristinápolis', 'SE');
            INSERT INTO `cidades` VALUES ('1465', '18', 'Cristino Castro', 'PI');
            INSERT INTO `cidades` VALUES ('1466', '5', 'Cristópolis', 'BA');
            INSERT INTO `cidades` VALUES ('1467', '9', 'Crixás', 'GO');
            INSERT INTO `cidades` VALUES ('1468', '27', 'Crixás do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('1469', '6', 'Croatá', 'CE');
            INSERT INTO `cidades` VALUES ('1470', '9', 'Cromínia', 'GO');
            INSERT INTO `cidades` VALUES ('1471', '13', 'Crucilândia', 'MG');
            INSERT INTO `cidades` VALUES ('1472', '6', 'Cruz', 'CE');
            INSERT INTO `cidades` VALUES ('1473', '21', 'Cruz Alta', 'RS');
            INSERT INTO `cidades` VALUES ('1474', '5', 'Cruz das Almas', 'BA');
            INSERT INTO `cidades` VALUES ('1475', '15', 'Cruz do Espírito Santo', 'PB');
            INSERT INTO `cidades` VALUES ('1476', '16', 'Cruz Machado', 'PR');
            INSERT INTO `cidades` VALUES ('1477', '25', 'Cruzália', 'SP');
            INSERT INTO `cidades` VALUES ('1478', '21', 'Cruzaltense', 'RS');
            INSERT INTO `cidades` VALUES ('1479', '25', 'Cruzeiro', 'SP');
            INSERT INTO `cidades` VALUES ('1480', '13', 'Cruzeiro da Fortaleza', 'MG');
            INSERT INTO `cidades` VALUES ('1481', '16', 'Cruzeiro do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('1482', '16', 'Cruzeiro do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('1483', '1', 'Cruzeiro do Sul', 'AC');
            INSERT INTO `cidades` VALUES ('1484', '16', 'Cruzeiro do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('1485', '21', 'Cruzeiro do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1486', '20', 'Cruzeta', 'RN');
            INSERT INTO `cidades` VALUES ('1487', '13', 'Cruzília', 'MG');
            INSERT INTO `cidades` VALUES ('1488', '16', 'Cruzmaltina', 'PR');
            INSERT INTO `cidades` VALUES ('1489', '25', 'Cubatão', 'SP');
            INSERT INTO `cidades` VALUES ('1490', '15', 'Cubati', 'PB');
            INSERT INTO `cidades` VALUES ('1491', '11', 'Cuiabá', 'MT');
            INSERT INTO `cidades` VALUES ('1492', '15', 'Cuité', 'PB');
            INSERT INTO `cidades` VALUES ('1493', '15', 'Cuité de Mamanguape', 'PB');
            INSERT INTO `cidades` VALUES ('1494', '15', 'Cuitegi', 'PB');
            INSERT INTO `cidades` VALUES ('1495', '22', 'Cujubim', 'RO');
            INSERT INTO `cidades` VALUES ('1496', '9', 'Cumari', 'GO');
            INSERT INTO `cidades` VALUES ('1497', '17', 'Cumaru', 'PE');
            INSERT INTO `cidades` VALUES ('1498', '14', 'Cumaru do Norte', 'PA');
            INSERT INTO `cidades` VALUES ('1499', '26', 'Cumbe', 'SE');
            INSERT INTO `cidades` VALUES ('1500', '25', 'Cunha', 'SP');
            INSERT INTO `cidades` VALUES ('1501', '24', 'Cunha Porã', 'SC');
            INSERT INTO `cidades` VALUES ('1502', '24', 'Cunhataí', 'SC');
            INSERT INTO `cidades` VALUES ('1503', '13', 'Cuparaque', 'MG');
            INSERT INTO `cidades` VALUES ('1504', '17', 'Cupira', 'PE');
            INSERT INTO `cidades` VALUES ('1505', '5', 'Curaçá', 'BA');
            INSERT INTO `cidades` VALUES ('1506', '18', 'Curimatá', 'PI');
            INSERT INTO `cidades` VALUES ('1507', '14', 'Curionópolis', 'PA');
            INSERT INTO `cidades` VALUES ('1508', '16', 'Curitiba', 'PR');
            INSERT INTO `cidades` VALUES ('1509', '24', 'Curitibanos', 'SC');
            INSERT INTO `cidades` VALUES ('1510', '16', 'Curiúva', 'PR');
            INSERT INTO `cidades` VALUES ('1511', '18', 'Currais', 'PI');
            INSERT INTO `cidades` VALUES ('1512', '20', 'Currais Novos', 'RN');
            INSERT INTO `cidades` VALUES ('1513', '15', 'Curral de Cima', 'PB');
            INSERT INTO `cidades` VALUES ('1514', '13', 'Curral de Dentro', 'MG');
            INSERT INTO `cidades` VALUES ('1515', '18', 'Curral Novo do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('1516', '15', 'Curral Velho', 'PB');
            INSERT INTO `cidades` VALUES ('1517', '14', 'Curralinho', 'PA');
            INSERT INTO `cidades` VALUES ('1518', '18', 'Curralinhos', 'PI');
            INSERT INTO `cidades` VALUES ('1519', '14', 'Curuá', 'PA');
            INSERT INTO `cidades` VALUES ('1520', '14', 'Curuçá', 'PA');
            INSERT INTO `cidades` VALUES ('1521', '10', 'Cururupu', 'MA');
            INSERT INTO `cidades` VALUES ('1522', '11', 'Curvelândia', 'MT');
            INSERT INTO `cidades` VALUES ('1523', '13', 'Curvelo', 'MG');
            INSERT INTO `cidades` VALUES ('1524', '17', 'Custódia', 'PE');
            INSERT INTO `cidades` VALUES ('1525', '3', 'Cutias', 'AP');
            INSERT INTO `cidades` VALUES ('1526', '9', 'Damianópolis', 'GO');
            INSERT INTO `cidades` VALUES ('1527', '15', 'Damião', 'PB');
            INSERT INTO `cidades` VALUES ('1528', '9', 'Damolândia', 'GO');
            INSERT INTO `cidades` VALUES ('1529', '27', 'Darcinópolis', 'TO');
            INSERT INTO `cidades` VALUES ('1530', '5', 'Dário Meira', 'BA');
            INSERT INTO `cidades` VALUES ('1531', '13', 'Datas', 'MG');
            INSERT INTO `cidades` VALUES ('1532', '21', 'David Canabarro', 'RS');
            INSERT INTO `cidades` VALUES ('1533', '9', 'Davinópolis', 'GO');
            INSERT INTO `cidades` VALUES ('1534', '10', 'Davinópolis', 'MA');
            INSERT INTO `cidades` VALUES ('1535', '13', 'Delfim Moreira', 'MG');
            INSERT INTO `cidades` VALUES ('1536', '13', 'Delfinópolis', 'MG');
            INSERT INTO `cidades` VALUES ('1537', '2', 'Delmiro Gouveia', 'AL');
            INSERT INTO `cidades` VALUES ('1538', '13', 'Delta', 'MG');
            INSERT INTO `cidades` VALUES ('1539', '18', 'Demerval Lobão', 'PI');
            INSERT INTO `cidades` VALUES ('1540', '11', 'Denise', 'MT');
            INSERT INTO `cidades` VALUES ('1541', '12', 'Deodápolis', 'MS');
            INSERT INTO `cidades` VALUES ('1542', '6', 'Deputado Irapuan Pinheiro', 'CE');
            INSERT INTO `cidades` VALUES ('1543', '21', 'Derrubadas', 'RS');
            INSERT INTO `cidades` VALUES ('1544', '25', 'Descalvado', 'SP');
            INSERT INTO `cidades` VALUES ('1545', '24', 'Descanso', 'SC');
            INSERT INTO `cidades` VALUES ('1546', '13', 'Descoberto', 'MG');
            INSERT INTO `cidades` VALUES ('1547', '15', 'Desterro', 'PB');
            INSERT INTO `cidades` VALUES ('1548', '13', 'Desterro de Entre Rios', 'MG');
            INSERT INTO `cidades` VALUES ('1549', '13', 'Desterro do Melo', 'MG');
            INSERT INTO `cidades` VALUES ('1550', '21', 'Dezesseis de Novembro', 'RS');
            INSERT INTO `cidades` VALUES ('1551', '25', 'Diadema', 'SP');
            INSERT INTO `cidades` VALUES ('1552', '15', 'Diamante', 'PB');
            INSERT INTO `cidades` VALUES ('1553', '16', 'Diamante do Norte', 'PR');
            INSERT INTO `cidades` VALUES ('1554', '16', 'Diamante do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('1555', '16', 'Diamante D\'Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('1556', '13', 'Diamantina', 'MG');
            INSERT INTO `cidades` VALUES ('1557', '11', 'Diamantino', 'MT');
            INSERT INTO `cidades` VALUES ('1558', '27', 'Dianópolis', 'TO');
            INSERT INTO `cidades` VALUES ('1559', '5', 'Dias d\'Ávila', 'BA');
            INSERT INTO `cidades` VALUES ('1560', '21', 'Dilermando de Aguiar', 'RS');
            INSERT INTO `cidades` VALUES ('1561', '13', 'Diogo de Vasconcelos', 'MG');
            INSERT INTO `cidades` VALUES ('1562', '13', 'Dionísio', 'MG');
            INSERT INTO `cidades` VALUES ('1563', '24', 'Dionísio Cerqueira', 'SC');
            INSERT INTO `cidades` VALUES ('1564', '9', 'Diorama', 'GO');
            INSERT INTO `cidades` VALUES ('1565', '25', 'Dirce Reis', 'SP');
            INSERT INTO `cidades` VALUES ('1566', '18', 'Dirceu Arcoverde', 'PI');
            INSERT INTO `cidades` VALUES ('1567', '26', 'Divina Pastora', 'SE');
            INSERT INTO `cidades` VALUES ('1568', '13', 'Divinésia', 'MG');
            INSERT INTO `cidades` VALUES ('1569', '13', 'Divino', 'MG');
            INSERT INTO `cidades` VALUES ('1570', '13', 'Divino das Laranjeiras', 'MG');
            INSERT INTO `cidades` VALUES ('1571', '8', 'Divino de São Lourenço', 'ES');
            INSERT INTO `cidades` VALUES ('1572', '25', 'Divinolândia', 'SP');
            INSERT INTO `cidades` VALUES ('1573', '13', 'Divinolândia de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('1574', '13', 'Divinópolis', 'MG');
            INSERT INTO `cidades` VALUES ('1575', '9', 'Divinópolis de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('1576', '27', 'Divinópolis do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('1577', '13', 'Divisa Alegre', 'MG');
            INSERT INTO `cidades` VALUES ('1578', '13', 'Divisa Nova', 'MG');
            INSERT INTO `cidades` VALUES ('1579', '13', 'Divisópolis', 'MG');
            INSERT INTO `cidades` VALUES ('1580', '25', 'Dobrada', 'SP');
            INSERT INTO `cidades` VALUES ('1581', '25', 'Dois Córregos', 'SP');
            INSERT INTO `cidades` VALUES ('1582', '21', 'Dois Irmãos', 'RS');
            INSERT INTO `cidades` VALUES ('1583', '21', 'Dois Irmãos das Missões', 'RS');
            INSERT INTO `cidades` VALUES ('1584', '12', 'Dois Irmãos do Buriti', 'MS');
            INSERT INTO `cidades` VALUES ('1585', '27', 'Dois Irmãos do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('1586', '21', 'Dois Lajeados', 'RS');
            INSERT INTO `cidades` VALUES ('1587', '2', 'Dois Riachos', 'AL');
            INSERT INTO `cidades` VALUES ('1588', '16', 'Dois Vizinhos', 'PR');
            INSERT INTO `cidades` VALUES ('1589', '25', 'Dolcinópolis', 'SP');
            INSERT INTO `cidades` VALUES ('1590', '11', 'Dom Aquino', 'MT');
            INSERT INTO `cidades` VALUES ('1591', '5', 'Dom Basílio', 'BA');
            INSERT INTO `cidades` VALUES ('1592', '13', 'Dom Bosco', 'MG');
            INSERT INTO `cidades` VALUES ('1593', '13', 'Dom Cavati', 'MG');
            INSERT INTO `cidades` VALUES ('1594', '14', 'Dom Eliseu', 'PA');
            INSERT INTO `cidades` VALUES ('1595', '18', 'Dom Expedito Lopes', 'PI');
            INSERT INTO `cidades` VALUES ('1596', '21', 'Dom Feliciano', 'RS');
            INSERT INTO `cidades` VALUES ('1597', '18', 'Dom Inocêncio', 'PI');
            INSERT INTO `cidades` VALUES ('1598', '13', 'Dom Joaquim', 'MG');
            INSERT INTO `cidades` VALUES ('1599', '5', 'Dom Macedo Costa', 'BA');
            INSERT INTO `cidades` VALUES ('1600', '21', 'Dom Pedrito', 'RS');
            INSERT INTO `cidades` VALUES ('1601', '10', 'Dom Pedro', 'MA');
            INSERT INTO `cidades` VALUES ('1602', '21', 'Dom Pedro de Alcântara', 'RS');
            INSERT INTO `cidades` VALUES ('1603', '13', 'Dom Silvério', 'MG');
            INSERT INTO `cidades` VALUES ('1604', '13', 'Dom Viçoso', 'MG');
            INSERT INTO `cidades` VALUES ('1605', '8', 'Domingos Martins', 'ES');
            INSERT INTO `cidades` VALUES ('1606', '18', 'Domingos Mourão', 'PI');
            INSERT INTO `cidades` VALUES ('1607', '24', 'Dona Emma', 'SC');
            INSERT INTO `cidades` VALUES ('1608', '13', 'Dona Eusébia', 'MG');
            INSERT INTO `cidades` VALUES ('1609', '21', 'Dona Francisca', 'RS');
            INSERT INTO `cidades` VALUES ('1610', '15', 'Dona Inês', 'PB');
            INSERT INTO `cidades` VALUES ('1611', '13', 'Dores de Campos', 'MG');
            INSERT INTO `cidades` VALUES ('1612', '13', 'Dores de Guanhães', 'MG');
            INSERT INTO `cidades` VALUES ('1613', '13', 'Dores do Indaiá', 'MG');
            INSERT INTO `cidades` VALUES ('1614', '8', 'Dores do Rio Preto', 'ES');
            INSERT INTO `cidades` VALUES ('1615', '13', 'Dores do Turvo', 'MG');
            INSERT INTO `cidades` VALUES ('1616', '13', 'Doresópolis', 'MG');
            INSERT INTO `cidades` VALUES ('1617', '17', 'Dormentes', 'PE');
            INSERT INTO `cidades` VALUES ('1618', '12', 'Douradina', 'MS');
            INSERT INTO `cidades` VALUES ('1619', '16', 'Douradina', 'PR');
            INSERT INTO `cidades` VALUES ('1620', '25', 'Dourado', 'SP');
            INSERT INTO `cidades` VALUES ('1621', '13', 'Douradoquara', 'MG');
            INSERT INTO `cidades` VALUES ('1622', '12', 'Dourados', 'MS');
            INSERT INTO `cidades` VALUES ('1623', '16', 'Doutor Camargo', 'PR');
            INSERT INTO `cidades` VALUES ('1624', '21', 'Doutor Maurício Cardoso', 'RS');
            INSERT INTO `cidades` VALUES ('1625', '24', 'Doutor Pedrinho', 'SC');
            INSERT INTO `cidades` VALUES ('1626', '21', 'Doutor Ricardo', 'RS');
            INSERT INTO `cidades` VALUES ('1627', '20', 'Doutor Severiano', 'RN');
            INSERT INTO `cidades` VALUES ('1628', '16', 'Doutor Ulysses', 'PR');
            INSERT INTO `cidades` VALUES ('1629', '9', 'Doverlândia', 'GO');
            INSERT INTO `cidades` VALUES ('1630', '25', 'Dracena', 'SP');
            INSERT INTO `cidades` VALUES ('1631', '25', 'Duartina', 'SP');
            INSERT INTO `cidades` VALUES ('1632', '19', 'Duas Barras', 'RJ');
            INSERT INTO `cidades` VALUES ('1633', '15', 'Duas Estradas', 'PB');
            INSERT INTO `cidades` VALUES ('1634', '27', 'Dueré', 'TO');
            INSERT INTO `cidades` VALUES ('1635', '25', 'Dumont', 'SP');
            INSERT INTO `cidades` VALUES ('1636', '10', 'Duque Bacelar', 'MA');
            INSERT INTO `cidades` VALUES ('1637', '19', 'Duque de Caxias', 'RJ');
            INSERT INTO `cidades` VALUES ('1638', '13', 'Durandé', 'MG');
            INSERT INTO `cidades` VALUES ('1639', '25', 'Echaporã', 'SP');
            INSERT INTO `cidades` VALUES ('1640', '8', 'Ecoporanga', 'ES');
            INSERT INTO `cidades` VALUES ('1641', '9', 'Edealina', 'GO');
            INSERT INTO `cidades` VALUES ('1642', '9', 'Edéia', 'GO');
            INSERT INTO `cidades` VALUES ('1643', '4', 'Eirunepé', 'AM');
            INSERT INTO `cidades` VALUES ('1644', '12', 'Eldorado', 'MS');
            INSERT INTO `cidades` VALUES ('1645', '25', 'Eldorado', 'SP');
            INSERT INTO `cidades` VALUES ('1646', '21', 'Eldorado do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1647', '14', 'Eldorado dos Carajás', 'PA');
            INSERT INTO `cidades` VALUES ('1648', '18', 'Elesbão Veloso', 'PI');
            INSERT INTO `cidades` VALUES ('1649', '25', 'Elias Fausto', 'SP');
            INSERT INTO `cidades` VALUES ('1650', '18', 'Eliseu Martins', 'PI');
            INSERT INTO `cidades` VALUES ('1651', '25', 'Elisiário', 'SP');
            INSERT INTO `cidades` VALUES ('1652', '5', 'Elísio Medrado', 'BA');
            INSERT INTO `cidades` VALUES ('1653', '13', 'Elói Mendes', 'MG');
            INSERT INTO `cidades` VALUES ('1654', '15', 'Emas', 'PB');
            INSERT INTO `cidades` VALUES ('1655', '25', 'Embaúba', 'SP');
            INSERT INTO `cidades` VALUES ('1656', '25', 'Embu', 'SP');
            INSERT INTO `cidades` VALUES ('1657', '25', 'Embu-Guaçu', 'SP');
            INSERT INTO `cidades` VALUES ('1658', '25', 'Emilianópolis', 'SP');
            INSERT INTO `cidades` VALUES ('1659', '21', 'Encantado', 'RS');
            INSERT INTO `cidades` VALUES ('1660', '20', 'Encanto', 'RN');
            INSERT INTO `cidades` VALUES ('1661', '5', 'Encruzilhada', 'BA');
            INSERT INTO `cidades` VALUES ('1662', '21', 'Encruzilhada do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1663', '16', 'Enéas Marques', 'PR');
            INSERT INTO `cidades` VALUES ('1664', '16', 'Engenheiro Beltrão', 'PR');
            INSERT INTO `cidades` VALUES ('1665', '13', 'Engenheiro Caldas', 'MG');
            INSERT INTO `cidades` VALUES ('1666', '25', 'Engenheiro Coelho', 'SP');
            INSERT INTO `cidades` VALUES ('1667', '13', 'Engenheiro Navarro', 'MG');
            INSERT INTO `cidades` VALUES ('1668', '19', 'Engenheiro Paulo de Frontin', 'RJ');
            INSERT INTO `cidades` VALUES ('1669', '21', 'Engenho Velho', 'RS');
            INSERT INTO `cidades` VALUES ('1670', '13', 'Entre Folhas', 'MG');
            INSERT INTO `cidades` VALUES ('1671', '5', 'Entre Rios', 'BA');
            INSERT INTO `cidades` VALUES ('1672', '24', 'Entre Rios', 'SC');
            INSERT INTO `cidades` VALUES ('1673', '13', 'Entre Rios de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('1674', '16', 'Entre Rios do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('1675', '21', 'Entre Rios do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1676', '21', 'Entre-Ijuís', 'RS');
            INSERT INTO `cidades` VALUES ('1677', '4', 'Envira', 'AM');
            INSERT INTO `cidades` VALUES ('1678', '1', 'Epitaciolândia', 'AC');
            INSERT INTO `cidades` VALUES ('1679', '20', 'Equador', 'RN');
            INSERT INTO `cidades` VALUES ('1680', '21', 'Erebango', 'RS');
            INSERT INTO `cidades` VALUES ('1681', '21', 'Erechim', 'RS');
            INSERT INTO `cidades` VALUES ('1682', '6', 'Ererê', 'CE');
            INSERT INTO `cidades` VALUES ('1683', '5', 'Érico Cardoso', 'BA');
            INSERT INTO `cidades` VALUES ('1684', '24', 'Ermo', 'SC');
            INSERT INTO `cidades` VALUES ('1685', '21', 'Ernestina', 'RS');
            INSERT INTO `cidades` VALUES ('1686', '21', 'Erval Grande', 'RS');
            INSERT INTO `cidades` VALUES ('1687', '21', 'Erval Seco', 'RS');
            INSERT INTO `cidades` VALUES ('1688', '24', 'Erval Velho', 'SC');
            INSERT INTO `cidades` VALUES ('1689', '13', 'Ervália', 'MG');
            INSERT INTO `cidades` VALUES ('1690', '17', 'Escada', 'PE');
            INSERT INTO `cidades` VALUES ('1691', '21', 'Esmeralda', 'RS');
            INSERT INTO `cidades` VALUES ('1692', '13', 'Esmeraldas', 'MG');
            INSERT INTO `cidades` VALUES ('1693', '13', 'Espera Feliz', 'MG');
            INSERT INTO `cidades` VALUES ('1694', '15', 'Esperança', 'PB');
            INSERT INTO `cidades` VALUES ('1695', '21', 'Esperança do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('1696', '16', 'Esperança Nova', 'PR');
            INSERT INTO `cidades` VALUES ('1697', '18', 'Esperantina', 'PI');
            INSERT INTO `cidades` VALUES ('1698', '27', 'Esperantina', 'TO');
            INSERT INTO `cidades` VALUES ('1699', '10', 'Esperantinópolis', 'MA');
            INSERT INTO `cidades` VALUES ('1700', '16', 'Espigão Alto do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('1701', '22', 'Espigão d\'Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('1702', '13', 'Espinosa', 'MG');
            INSERT INTO `cidades` VALUES ('1703', '20', 'Espírito Santo', 'RN');
            INSERT INTO `cidades` VALUES ('1704', '13', 'Espírito Santo do Dourado', 'MG');
            INSERT INTO `cidades` VALUES ('1705', '25', 'Espírito Santo do Pinhal', 'SP');
            INSERT INTO `cidades` VALUES ('1706', '25', 'Espírito Santo do Turvo', 'SP');
            INSERT INTO `cidades` VALUES ('1707', '5', 'Esplanada', 'BA');
            INSERT INTO `cidades` VALUES ('1708', '21', 'Espumoso', 'RS');
            INSERT INTO `cidades` VALUES ('1709', '21', 'Estação', 'RS');
            INSERT INTO `cidades` VALUES ('1710', '26', 'Estância', 'SE');
            INSERT INTO `cidades` VALUES ('1711', '21', 'Estância Velha', 'RS');
            INSERT INTO `cidades` VALUES ('1712', '21', 'Esteio', 'RS');
            INSERT INTO `cidades` VALUES ('1713', '13', 'Estiva', 'MG');
            INSERT INTO `cidades` VALUES ('1714', '25', 'Estiva Gerbi', 'SP');
            INSERT INTO `cidades` VALUES ('1715', '10', 'Estreito', 'MA');
            INSERT INTO `cidades` VALUES ('1716', '21', 'Estrela', 'RS');
            INSERT INTO `cidades` VALUES ('1717', '13', 'Estrela Dalva', 'MG');
            INSERT INTO `cidades` VALUES ('1718', '2', 'Estrela de Alagoas', 'AL');
            INSERT INTO `cidades` VALUES ('1719', '13', 'Estrela do Indaiá', 'MG');
            INSERT INTO `cidades` VALUES ('1720', '9', 'Estrela do Norte', 'GO');
            INSERT INTO `cidades` VALUES ('1721', '25', 'Estrela do Norte', 'SP');
            INSERT INTO `cidades` VALUES ('1722', '13', 'Estrela do Sul', 'MG');
            INSERT INTO `cidades` VALUES ('1723', '25', 'Estrela d\'Oeste', 'SP');
            INSERT INTO `cidades` VALUES ('1724', '21', 'Estrela Velha', 'RS');
            INSERT INTO `cidades` VALUES ('1725', '5', 'Euclides da Cunha', 'BA');
            INSERT INTO `cidades` VALUES ('1726', '25', 'Euclides da Cunha Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('1727', '21', 'Eugênio de Castro', 'RS');
            INSERT INTO `cidades` VALUES ('1728', '13', 'Eugenópolis', 'MG');
            INSERT INTO `cidades` VALUES ('1729', '5', 'Eunápolis', 'BA');
            INSERT INTO `cidades` VALUES ('1730', '6', 'Eusébio', 'CE');
            INSERT INTO `cidades` VALUES ('1731', '13', 'Ewbank da Câmara', 'MG');
            INSERT INTO `cidades` VALUES ('1732', '13', 'Extrema', 'MG');
            INSERT INTO `cidades` VALUES ('1733', '20', 'Extremoz', 'RN');
            INSERT INTO `cidades` VALUES ('1734', '17', 'Exu', 'PE');
            INSERT INTO `cidades` VALUES ('1735', '15', 'Fagundes', 'PB');
            INSERT INTO `cidades` VALUES ('1736', '21', 'Fagundes Varela', 'RS');
            INSERT INTO `cidades` VALUES ('1737', '9', 'Faina', 'GO');
            INSERT INTO `cidades` VALUES ('1738', '13', 'Fama', 'MG');
            INSERT INTO `cidades` VALUES ('1739', '13', 'Faria Lemos', 'MG');
            INSERT INTO `cidades` VALUES ('1740', '6', 'Farias Brito', 'CE');
            INSERT INTO `cidades` VALUES ('1741', '14', 'Faro', 'PA');
            INSERT INTO `cidades` VALUES ('1742', '16', 'Farol', 'PR');
            INSERT INTO `cidades` VALUES ('1743', '21', 'Farroupilha', 'RS');
            INSERT INTO `cidades` VALUES ('1744', '25', 'Fartura', 'SP');
            INSERT INTO `cidades` VALUES ('1745', '18', 'Fartura do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('1746', '5', 'Fátima', 'BA');
            INSERT INTO `cidades` VALUES ('1747', '27', 'Fátima', 'TO');
            INSERT INTO `cidades` VALUES ('1748', '12', 'Fátima do Sul', 'MS');
            INSERT INTO `cidades` VALUES ('1749', '16', 'Faxinal', 'PR');
            INSERT INTO `cidades` VALUES ('1750', '21', 'Faxinal do Soturno', 'RS');
            INSERT INTO `cidades` VALUES ('1751', '24', 'Faxinal dos Guedes', 'SC');
            INSERT INTO `cidades` VALUES ('1752', '21', 'Faxinalzinho', 'RS');
            INSERT INTO `cidades` VALUES ('1753', '9', 'Fazenda Nova', 'GO');
            INSERT INTO `cidades` VALUES ('1754', '16', 'Fazenda Rio Grande', 'PR');
            INSERT INTO `cidades` VALUES ('1755', '21', 'Fazenda Vilanova', 'RS');
            INSERT INTO `cidades` VALUES ('1756', '1', 'Feijó', 'AC');
            INSERT INTO `cidades` VALUES ('1757', '5', 'Feira da Mata', 'BA');
            INSERT INTO `cidades` VALUES ('1758', '5', 'Feira de Santana', 'BA');
            INSERT INTO `cidades` VALUES ('1759', '2', 'Feira Grande', 'AL');
            INSERT INTO `cidades` VALUES ('1760', '17', 'Feira Nova', 'PE');
            INSERT INTO `cidades` VALUES ('1761', '26', 'Feira Nova', 'SE');
            INSERT INTO `cidades` VALUES ('1762', '10', 'Feira Nova do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('1763', '13', 'Felício dos Santos', 'MG');
            INSERT INTO `cidades` VALUES ('1764', '20', 'Felipe Guerra', 'RN');
            INSERT INTO `cidades` VALUES ('1765', '13', 'Felisburgo', 'MG');
            INSERT INTO `cidades` VALUES ('1766', '13', 'Felixlândia', 'MG');
            INSERT INTO `cidades` VALUES ('1767', '21', 'Feliz', 'RS');
            INSERT INTO `cidades` VALUES ('1768', '2', 'Feliz Deserto', 'AL');
            INSERT INTO `cidades` VALUES ('1769', '11', 'Feliz Natal', 'MT');
            INSERT INTO `cidades` VALUES ('1770', '16', 'Fênix', 'PR');
            INSERT INTO `cidades` VALUES ('1771', '16', 'Fernandes Pinheiro', 'PR');
            INSERT INTO `cidades` VALUES ('1772', '13', 'Fernandes Tourinho', 'MG');
            INSERT INTO `cidades` VALUES ('1773', '17', 'Fernando de Noronha', 'PE');
            INSERT INTO `cidades` VALUES ('1774', '10', 'Fernando Falcão', 'MA');
            INSERT INTO `cidades` VALUES ('1775', '20', 'Fernando Pedroza', 'RN');
            INSERT INTO `cidades` VALUES ('1776', '25', 'Fernando Prestes', 'SP');
            INSERT INTO `cidades` VALUES ('1777', '25', 'Fernandópolis', 'SP');
            INSERT INTO `cidades` VALUES ('1778', '25', 'Fernão', 'SP');
            INSERT INTO `cidades` VALUES ('1779', '25', 'Ferraz de Vasconcelos', 'SP');
            INSERT INTO `cidades` VALUES ('1780', '3', 'Ferreira Gomes', 'AP');
            INSERT INTO `cidades` VALUES ('1781', '17', 'Ferreiros', 'PE');
            INSERT INTO `cidades` VALUES ('1782', '13', 'Ferros', 'MG');
            INSERT INTO `cidades` VALUES ('1783', '13', 'Fervedouro', 'MG');
            INSERT INTO `cidades` VALUES ('1784', '16', 'Figueira', 'PR');
            INSERT INTO `cidades` VALUES ('1785', '12', 'Figueirão', 'MS');
            INSERT INTO `cidades` VALUES ('1786', '27', 'Figueirópolis', 'TO');
            INSERT INTO `cidades` VALUES ('1787', '11', 'Figueirópolis D\'Oeste', 'MT');
            INSERT INTO `cidades` VALUES ('1788', '5', 'Filadélfia', 'BA');
            INSERT INTO `cidades` VALUES ('1789', '27', 'Filadélfia', 'TO');
            INSERT INTO `cidades` VALUES ('1790', '5', 'Firmino Alves', 'BA');
            INSERT INTO `cidades` VALUES ('1791', '9', 'Firminópolis', 'GO');
            INSERT INTO `cidades` VALUES ('1792', '2', 'Flexeiras', 'AL');
            INSERT INTO `cidades` VALUES ('1793', '16', 'Flor da Serra do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('1794', '24', 'Flor do Sertão', 'SC');
            INSERT INTO `cidades` VALUES ('1795', '25', 'Flora Rica', 'SP');
            INSERT INTO `cidades` VALUES ('1796', '16', 'Floraí', 'PR');
            INSERT INTO `cidades` VALUES ('1797', '20', 'Florânia', 'RN');
            INSERT INTO `cidades` VALUES ('1798', '25', 'Floreal', 'SP');
            INSERT INTO `cidades` VALUES ('1799', '17', 'Flores', 'PE');
            INSERT INTO `cidades` VALUES ('1800', '21', 'Flores da Cunha', 'RS');
            INSERT INTO `cidades` VALUES ('1801', '9', 'Flores de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('1802', '18', 'Flores do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('1803', '17', 'Floresta', 'PE');
            INSERT INTO `cidades` VALUES ('1804', '16', 'Floresta', 'PR');
            INSERT INTO `cidades` VALUES ('1805', '5', 'Floresta Azul', 'BA');
            INSERT INTO `cidades` VALUES ('1806', '14', 'Floresta do Araguaia', 'PA');
            INSERT INTO `cidades` VALUES ('1807', '18', 'Floresta do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('1808', '13', 'Florestal', 'MG');
            INSERT INTO `cidades` VALUES ('1809', '16', 'Florestópolis', 'PR');
            INSERT INTO `cidades` VALUES ('1810', '18', 'Floriano', 'PI');
            INSERT INTO `cidades` VALUES ('1811', '21', 'Floriano Peixoto', 'RS');
            INSERT INTO `cidades` VALUES ('1812', '24', 'Florianópolis', 'SC');
            INSERT INTO `cidades` VALUES ('1813', '16', 'Flórida', 'PR');
            INSERT INTO `cidades` VALUES ('1814', '25', 'Flórida Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('1815', '25', 'Florínia', 'SP');
            INSERT INTO `cidades` VALUES ('1816', '4', 'Fonte Boa', 'AM');
            INSERT INTO `cidades` VALUES ('1817', '21', 'Fontoura Xavier', 'RS');
            INSERT INTO `cidades` VALUES ('1818', '13', 'Formiga', 'MG');
            INSERT INTO `cidades` VALUES ('1819', '21', 'Formigueiro', 'RS');
            INSERT INTO `cidades` VALUES ('1820', '9', 'Formosa', 'GO');
            INSERT INTO `cidades` VALUES ('1821', '10', 'Formosa da Serra Negra', 'MA');
            INSERT INTO `cidades` VALUES ('1822', '16', 'Formosa do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('1823', '5', 'Formosa do Rio Preto', 'BA');
            INSERT INTO `cidades` VALUES ('1824', '24', 'Formosa do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('1825', '9', 'Formoso', 'GO');
            INSERT INTO `cidades` VALUES ('1826', '13', 'Formoso', 'MG');
            INSERT INTO `cidades` VALUES ('1827', '27', 'Formoso do Araguaia', 'TO');
            INSERT INTO `cidades` VALUES ('1828', '21', 'Forquetinha', 'RS');
            INSERT INTO `cidades` VALUES ('1829', '6', 'Forquilha', 'CE');
            INSERT INTO `cidades` VALUES ('1830', '24', 'Forquilhinha', 'SC');
            INSERT INTO `cidades` VALUES ('1831', '6', 'Fortaleza', 'CE');
            INSERT INTO `cidades` VALUES ('1832', '13', 'Fortaleza de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('1833', '27', 'Fortaleza do Tabocão', 'TO');
            INSERT INTO `cidades` VALUES ('1834', '10', 'Fortaleza dos Nogueiras', 'MA');
            INSERT INTO `cidades` VALUES ('1835', '21', 'Fortaleza dos Valos', 'RS');
            INSERT INTO `cidades` VALUES ('1836', '6', 'Fortim', 'CE');
            INSERT INTO `cidades` VALUES ('1837', '10', 'Fortuna', 'MA');
            INSERT INTO `cidades` VALUES ('1838', '13', 'Fortuna de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('1839', '16', 'Foz do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('1840', '16', 'Foz do Jordão', 'PR');
            INSERT INTO `cidades` VALUES ('1841', '24', 'Fraiburgo', 'SC');
            INSERT INTO `cidades` VALUES ('1842', '25', 'Franca', 'SP');
            INSERT INTO `cidades` VALUES ('1843', '18', 'Francinópolis', 'PI');
            INSERT INTO `cidades` VALUES ('1844', '16', 'Francisco Alves', 'PR');
            INSERT INTO `cidades` VALUES ('1845', '18', 'Francisco Ayres', 'PI');
            INSERT INTO `cidades` VALUES ('1846', '13', 'Francisco Badaró', 'MG');
            INSERT INTO `cidades` VALUES ('1847', '16', 'Francisco Beltrão', 'PR');
            INSERT INTO `cidades` VALUES ('1848', '20', 'Francisco Dantas', 'RN');
            INSERT INTO `cidades` VALUES ('1849', '13', 'Francisco Dumont', 'MG');
            INSERT INTO `cidades` VALUES ('1850', '18', 'Francisco Macedo', 'PI');
            INSERT INTO `cidades` VALUES ('1851', '25', 'Francisco Morato', 'SP');
            INSERT INTO `cidades` VALUES ('1852', '13', 'Francisco Sá', 'MG');
            INSERT INTO `cidades` VALUES ('1853', '18', 'Francisco Santos', 'PI');
            INSERT INTO `cidades` VALUES ('1854', '13', 'Franciscópolis', 'MG');
            INSERT INTO `cidades` VALUES ('1855', '25', 'Franco da Rocha', 'SP');
            INSERT INTO `cidades` VALUES ('1856', '6', 'Frecheirinha', 'CE');
            INSERT INTO `cidades` VALUES ('1857', '21', 'Frederico Westphalen', 'RS');
            INSERT INTO `cidades` VALUES ('1858', '13', 'Frei Gaspar', 'MG');
            INSERT INTO `cidades` VALUES ('1859', '13', 'Frei Inocêncio', 'MG');
            INSERT INTO `cidades` VALUES ('1860', '13', 'Frei Lagonegro', 'MG');
            INSERT INTO `cidades` VALUES ('1861', '15', 'Frei Martinho', 'PB');
            INSERT INTO `cidades` VALUES ('1862', '17', 'Frei Miguelinho', 'PE');
            INSERT INTO `cidades` VALUES ('1863', '26', 'Frei Paulo', 'SE');
            INSERT INTO `cidades` VALUES ('1864', '24', 'Frei Rogério', 'SC');
            INSERT INTO `cidades` VALUES ('1865', '13', 'Fronteira', 'MG');
            INSERT INTO `cidades` VALUES ('1866', '13', 'Fronteira dos Vales', 'MG');
            INSERT INTO `cidades` VALUES ('1867', '18', 'Fronteiras', 'PI');
            INSERT INTO `cidades` VALUES ('1868', '13', 'Fruta de Leite', 'MG');
            INSERT INTO `cidades` VALUES ('1869', '13', 'Frutal', 'MG');
            INSERT INTO `cidades` VALUES ('1870', '20', 'Frutuoso Gomes', 'RN');
            INSERT INTO `cidades` VALUES ('1871', '8', 'Fundão', 'ES');
            INSERT INTO `cidades` VALUES ('1872', '13', 'Funilândia', 'MG');
            INSERT INTO `cidades` VALUES ('1873', '25', 'Gabriel Monteiro', 'SP');
            INSERT INTO `cidades` VALUES ('1874', '15', 'Gado Bravo', 'PB');
            INSERT INTO `cidades` VALUES ('1875', '25', 'Gália', 'SP');
            INSERT INTO `cidades` VALUES ('1876', '13', 'Galiléia', 'MG');
            INSERT INTO `cidades` VALUES ('1877', '20', 'Galinhos', 'RN');
            INSERT INTO `cidades` VALUES ('1878', '24', 'Galvão', 'SC');
            INSERT INTO `cidades` VALUES ('1879', '17', 'Gameleira', 'PE');
            INSERT INTO `cidades` VALUES ('1880', '9', 'Gameleira de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('1881', '13', 'Gameleiras', 'MG');
            INSERT INTO `cidades` VALUES ('1882', '5', 'Gandu', 'BA');
            INSERT INTO `cidades` VALUES ('1883', '17', 'Garanhuns', 'PE');
            INSERT INTO `cidades` VALUES ('1884', '26', 'Gararu', 'SE');
            INSERT INTO `cidades` VALUES ('1885', '25', 'Garça', 'SP');
            INSERT INTO `cidades` VALUES ('1886', '21', 'Garibaldi', 'RS');
            INSERT INTO `cidades` VALUES ('1887', '24', 'Garopaba', 'SC');
            INSERT INTO `cidades` VALUES ('1888', '14', 'Garrafão do Norte', 'PA');
            INSERT INTO `cidades` VALUES ('1889', '21', 'Garruchos', 'RS');
            INSERT INTO `cidades` VALUES ('1890', '24', 'Garuva', 'SC');
            INSERT INTO `cidades` VALUES ('1891', '24', 'Gaspar', 'SC');
            INSERT INTO `cidades` VALUES ('1892', '25', 'Gastão Vidigal', 'SP');
            INSERT INTO `cidades` VALUES ('1893', '11', 'Gaúcha do Norte', 'MT');
            INSERT INTO `cidades` VALUES ('1894', '21', 'Gaurama', 'RS');
            INSERT INTO `cidades` VALUES ('1895', '5', 'Gavião', 'BA');
            INSERT INTO `cidades` VALUES ('1896', '25', 'Gavião Peixoto', 'SP');
            INSERT INTO `cidades` VALUES ('1897', '18', 'Geminiano', 'PI');
            INSERT INTO `cidades` VALUES ('1898', '21', 'General Câmara', 'RS');
            INSERT INTO `cidades` VALUES ('1899', '11', 'General Carneiro', 'MT');
            INSERT INTO `cidades` VALUES ('1900', '16', 'General Carneiro', 'PR');
            INSERT INTO `cidades` VALUES ('1901', '26', 'General Maynard', 'SE');
            INSERT INTO `cidades` VALUES ('1902', '25', 'General Salgado', 'SP');
            INSERT INTO `cidades` VALUES ('1903', '6', 'General Sampaio', 'CE');
            INSERT INTO `cidades` VALUES ('1904', '21', 'Gentil', 'RS');
            INSERT INTO `cidades` VALUES ('1905', '5', 'Gentio do Ouro', 'BA');
            INSERT INTO `cidades` VALUES ('1906', '25', 'Getulina', 'SP');
            INSERT INTO `cidades` VALUES ('1907', '21', 'Getúlio Vargas', 'RS');
            INSERT INTO `cidades` VALUES ('1908', '18', 'Gilbués', 'PI');
            INSERT INTO `cidades` VALUES ('1909', '2', 'Girau do Ponciano', 'AL');
            INSERT INTO `cidades` VALUES ('1910', '21', 'Giruá', 'RS');
            INSERT INTO `cidades` VALUES ('1911', '13', 'Glaucilândia', 'MG');
            INSERT INTO `cidades` VALUES ('1912', '25', 'Glicério', 'SP');
            INSERT INTO `cidades` VALUES ('1913', '5', 'Glória', 'BA');
            INSERT INTO `cidades` VALUES ('1914', '12', 'Glória de Dourados', 'MS');
            INSERT INTO `cidades` VALUES ('1915', '17', 'Glória do Goitá', 'PE');
            INSERT INTO `cidades` VALUES ('1916', '11', 'Glória D\'Oeste', 'MT');
            INSERT INTO `cidades` VALUES ('1917', '21', 'Glorinha', 'RS');
            INSERT INTO `cidades` VALUES ('1918', '10', 'Godofredo Viana', 'MA');
            INSERT INTO `cidades` VALUES ('1919', '16', 'Godoy Moreira', 'PR');
            INSERT INTO `cidades` VALUES ('1920', '13', 'Goiabeira', 'MG');
            INSERT INTO `cidades` VALUES ('1921', '17', 'Goiana', 'PE');
            INSERT INTO `cidades` VALUES ('1922', '13', 'Goianá', 'MG');
            INSERT INTO `cidades` VALUES ('1923', '9', 'Goianápolis', 'GO');
            INSERT INTO `cidades` VALUES ('1924', '9', 'Goiandira', 'GO');
            INSERT INTO `cidades` VALUES ('1925', '9', 'Goianésia', 'GO');
            INSERT INTO `cidades` VALUES ('1926', '14', 'Goianésia do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('1927', '9', 'Goiânia', 'GO');
            INSERT INTO `cidades` VALUES ('1928', '20', 'Goianinha', 'RN');
            INSERT INTO `cidades` VALUES ('1929', '9', 'Goianira', 'GO');
            INSERT INTO `cidades` VALUES ('1930', '27', 'Goianorte', 'TO');
            INSERT INTO `cidades` VALUES ('1931', '9', 'Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('1932', '27', 'Goiatins', 'TO');
            INSERT INTO `cidades` VALUES ('1933', '9', 'Goiatuba', 'GO');
            INSERT INTO `cidades` VALUES ('1934', '16', 'Goioerê', 'PR');
            INSERT INTO `cidades` VALUES ('1935', '16', 'Goioxim', 'PR');
            INSERT INTO `cidades` VALUES ('1936', '13', 'Gonçalves', 'MG');
            INSERT INTO `cidades` VALUES ('1937', '10', 'Gonçalves Dias', 'MA');
            INSERT INTO `cidades` VALUES ('1938', '5', 'Gongogi', 'BA');
            INSERT INTO `cidades` VALUES ('1939', '13', 'Gonzaga', 'MG');
            INSERT INTO `cidades` VALUES ('1940', '13', 'Gouveia', 'MG');
            INSERT INTO `cidades` VALUES ('1941', '9', 'Gouvelândia', 'GO');
            INSERT INTO `cidades` VALUES ('1942', '10', 'Governador Archer', 'MA');
            INSERT INTO `cidades` VALUES ('1943', '24', 'Governador Celso Ramos', 'SC');
            INSERT INTO `cidades` VALUES ('1944', '20', 'Governador Dix-Sept Rosado', 'RN');
            INSERT INTO `cidades` VALUES ('1945', '10', 'Governador Edison Lobão', 'MA');
            INSERT INTO `cidades` VALUES ('1946', '10', 'Governador Eugênio Barros', 'MA');
            INSERT INTO `cidades` VALUES ('1947', '22', 'Governador Jorge Teixeira', 'RO');
            INSERT INTO `cidades` VALUES ('1948', '8', 'Governador Lindenberg', 'ES');
            INSERT INTO `cidades` VALUES ('1949', '10', 'Governador Luiz Rocha', 'MA');
            INSERT INTO `cidades` VALUES ('1950', '5', 'Governador Mangabeira', 'BA');
            INSERT INTO `cidades` VALUES ('1951', '10', 'Governador Newton Bello', 'MA');
            INSERT INTO `cidades` VALUES ('1952', '10', 'Governador Nunes Freire', 'MA');
            INSERT INTO `cidades` VALUES ('1953', '13', 'Governador Valadares', 'MG');
            INSERT INTO `cidades` VALUES ('1954', '6', 'Graça', 'CE');
            INSERT INTO `cidades` VALUES ('1955', '10', 'Graça Aranha', 'MA');
            INSERT INTO `cidades` VALUES ('1956', '26', 'Gracho Cardoso', 'SE');
            INSERT INTO `cidades` VALUES ('1957', '10', 'Grajaú', 'MA');
            INSERT INTO `cidades` VALUES ('1958', '21', 'Gramado', 'RS');
            INSERT INTO `cidades` VALUES ('1959', '21', 'Gramado dos Loureiros', 'RS');
            INSERT INTO `cidades` VALUES ('1960', '21', 'Gramado Xavier', 'RS');
            INSERT INTO `cidades` VALUES ('1961', '16', 'Grandes Rios', 'PR');
            INSERT INTO `cidades` VALUES ('1962', '17', 'Granito', 'PE');
            INSERT INTO `cidades` VALUES ('1963', '6', 'Granja', 'CE');
            INSERT INTO `cidades` VALUES ('1964', '6', 'Granjeiro', 'CE');
            INSERT INTO `cidades` VALUES ('1965', '13', 'Grão Mogol', 'MG');
            INSERT INTO `cidades` VALUES ('1966', '24', 'Grão Pará', 'SC');
            INSERT INTO `cidades` VALUES ('1967', '17', 'Gravatá', 'PE');
            INSERT INTO `cidades` VALUES ('1968', '21', 'Gravataí', 'RS');
            INSERT INTO `cidades` VALUES ('1969', '24', 'Gravatal', 'SC');
            INSERT INTO `cidades` VALUES ('1970', '6', 'Groaíras', 'CE');
            INSERT INTO `cidades` VALUES ('1971', '20', 'Grossos', 'RN');
            INSERT INTO `cidades` VALUES ('1972', '13', 'Grupiara', 'MG');
            INSERT INTO `cidades` VALUES ('1973', '21', 'Guabiju', 'RS');
            INSERT INTO `cidades` VALUES ('1974', '24', 'Guabiruba', 'SC');
            INSERT INTO `cidades` VALUES ('1975', '8', 'Guaçuí', 'ES');
            INSERT INTO `cidades` VALUES ('1976', '18', 'Guadalupe', 'PI');
            INSERT INTO `cidades` VALUES ('1977', '21', 'Guaíba', 'RS');
            INSERT INTO `cidades` VALUES ('1978', '25', 'Guaiçara', 'SP');
            INSERT INTO `cidades` VALUES ('1979', '25', 'Guaimbê', 'SP');
            INSERT INTO `cidades` VALUES ('1980', '16', 'Guaíra', 'PR');
            INSERT INTO `cidades` VALUES ('1981', '25', 'Guaíra', 'SP');
            INSERT INTO `cidades` VALUES ('1982', '16', 'Guairaçá', 'PR');
            INSERT INTO `cidades` VALUES ('1983', '6', 'Guaiúba', 'CE');
            INSERT INTO `cidades` VALUES ('1984', '4', 'Guajará', 'AM');
            INSERT INTO `cidades` VALUES ('1985', '22', 'Guajará-Mirim', 'RO');
            INSERT INTO `cidades` VALUES ('1986', '5', 'Guajeru', 'BA');
            INSERT INTO `cidades` VALUES ('1987', '20', 'Guamaré', 'RN');
            INSERT INTO `cidades` VALUES ('1988', '16', 'Guamiranga', 'PR');
            INSERT INTO `cidades` VALUES ('1989', '5', 'Guanambi', 'BA');
            INSERT INTO `cidades` VALUES ('1990', '13', 'Guanhães', 'MG');
            INSERT INTO `cidades` VALUES ('1991', '13', 'Guapé', 'MG');
            INSERT INTO `cidades` VALUES ('1992', '25', 'Guapiaçu', 'SP');
            INSERT INTO `cidades` VALUES ('1993', '25', 'Guapiara', 'SP');
            INSERT INTO `cidades` VALUES ('1994', '19', 'Guapimirim', 'RJ');
            INSERT INTO `cidades` VALUES ('1995', '16', 'Guapirama', 'PR');
            INSERT INTO `cidades` VALUES ('1996', '9', 'Guapó', 'GO');
            INSERT INTO `cidades` VALUES ('1997', '21', 'Guaporé', 'RS');
            INSERT INTO `cidades` VALUES ('1998', '16', 'Guaporema', 'PR');
            INSERT INTO `cidades` VALUES ('1999', '25', 'Guará', 'SP');
            INSERT INTO `cidades` VALUES ('2000', '15', 'Guarabira', 'PB');
            INSERT INTO `cidades` VALUES ('2001', '25', 'Guaraçaí', 'SP');
            INSERT INTO `cidades` VALUES ('2002', '16', 'Guaraci', 'PR');
            INSERT INTO `cidades` VALUES ('2003', '25', 'Guaraci', 'SP');
            INSERT INTO `cidades` VALUES ('2004', '13', 'Guaraciaba', 'MG');
            INSERT INTO `cidades` VALUES ('2005', '24', 'Guaraciaba', 'SC');
            INSERT INTO `cidades` VALUES ('2006', '6', 'Guaraciaba do Norte', 'CE');
            INSERT INTO `cidades` VALUES ('2007', '13', 'Guaraciama', 'MG');
            INSERT INTO `cidades` VALUES ('2008', '27', 'Guaraí', 'TO');
            INSERT INTO `cidades` VALUES ('2009', '9', 'Guaraíta', 'GO');
            INSERT INTO `cidades` VALUES ('2010', '6', 'Guaramiranga', 'CE');
            INSERT INTO `cidades` VALUES ('2011', '24', 'Guaramirim', 'SC');
            INSERT INTO `cidades` VALUES ('2012', '13', 'Guaranésia', 'MG');
            INSERT INTO `cidades` VALUES ('2013', '13', 'Guarani', 'MG');
            INSERT INTO `cidades` VALUES ('2014', '21', 'Guarani das Missões', 'RS');
            INSERT INTO `cidades` VALUES ('2015', '9', 'Guarani de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('2016', '25', 'Guarani d\'Oeste', 'SP');
            INSERT INTO `cidades` VALUES ('2017', '16', 'Guaraniaçu', 'PR');
            INSERT INTO `cidades` VALUES ('2018', '25', 'Guarantã', 'SP');
            INSERT INTO `cidades` VALUES ('2019', '11', 'Guarantã do Norte', 'MT');
            INSERT INTO `cidades` VALUES ('2020', '8', 'Guarapari', 'ES');
            INSERT INTO `cidades` VALUES ('2021', '16', 'Guarapuava', 'PR');
            INSERT INTO `cidades` VALUES ('2022', '16', 'Guaraqueçaba', 'PR');
            INSERT INTO `cidades` VALUES ('2023', '13', 'Guarará', 'MG');
            INSERT INTO `cidades` VALUES ('2024', '25', 'Guararapes', 'SP');
            INSERT INTO `cidades` VALUES ('2025', '25', 'Guararema', 'SP');
            INSERT INTO `cidades` VALUES ('2026', '5', 'Guaratinga', 'BA');
            INSERT INTO `cidades` VALUES ('2027', '25', 'Guaratinguetá', 'SP');
            INSERT INTO `cidades` VALUES ('2028', '16', 'Guaratuba', 'PR');
            INSERT INTO `cidades` VALUES ('2029', '13', 'Guarda-Mor', 'MG');
            INSERT INTO `cidades` VALUES ('2030', '25', 'Guareí', 'SP');
            INSERT INTO `cidades` VALUES ('2031', '25', 'Guariba', 'SP');
            INSERT INTO `cidades` VALUES ('2032', '18', 'Guaribas', 'PI');
            INSERT INTO `cidades` VALUES ('2033', '9', 'Guarinos', 'GO');
            INSERT INTO `cidades` VALUES ('2034', '25', 'Guarujá', 'SP');
            INSERT INTO `cidades` VALUES ('2035', '24', 'Guarujá do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('2036', '25', 'Guarulhos', 'SP');
            INSERT INTO `cidades` VALUES ('2037', '24', 'Guatambú', 'SC');
            INSERT INTO `cidades` VALUES ('2038', '25', 'Guatapará', 'SP');
            INSERT INTO `cidades` VALUES ('2039', '13', 'Guaxupé', 'MG');
            INSERT INTO `cidades` VALUES ('2040', '12', 'Guia Lopes da Laguna', 'MS');
            INSERT INTO `cidades` VALUES ('2041', '13', 'Guidoval', 'MG');
            INSERT INTO `cidades` VALUES ('2042', '10', 'Guimarães', 'MA');
            INSERT INTO `cidades` VALUES ('2043', '13', 'Guimarânia', 'MG');
            INSERT INTO `cidades` VALUES ('2044', '11', 'Guiratinga', 'MT');
            INSERT INTO `cidades` VALUES ('2045', '13', 'Guiricema', 'MG');
            INSERT INTO `cidades` VALUES ('2046', '13', 'Gurinhatã', 'MG');
            INSERT INTO `cidades` VALUES ('2047', '15', 'Gurinhém', 'PB');
            INSERT INTO `cidades` VALUES ('2048', '15', 'Gurjão', 'PB');
            INSERT INTO `cidades` VALUES ('2049', '14', 'Gurupá', 'PA');
            INSERT INTO `cidades` VALUES ('2050', '27', 'Gurupi', 'TO');
            INSERT INTO `cidades` VALUES ('2051', '25', 'Guzolândia', 'SP');
            INSERT INTO `cidades` VALUES ('2052', '21', 'Harmonia', 'RS');
            INSERT INTO `cidades` VALUES ('2053', '9', 'Heitoraí', 'GO');
            INSERT INTO `cidades` VALUES ('2054', '13', 'Heliodora', 'MG');
            INSERT INTO `cidades` VALUES ('2055', '5', 'Heliópolis', 'BA');
            INSERT INTO `cidades` VALUES ('2056', '25', 'Herculândia', 'SP');
            INSERT INTO `cidades` VALUES ('2057', '21', 'Herval', 'RS');
            INSERT INTO `cidades` VALUES ('2058', '24', 'Herval d\'Oeste', 'SC');
            INSERT INTO `cidades` VALUES ('2059', '21', 'Herveiras', 'RS');
            INSERT INTO `cidades` VALUES ('2060', '6', 'Hidrolândia', 'CE');
            INSERT INTO `cidades` VALUES ('2061', '9', 'Hidrolândia', 'GO');
            INSERT INTO `cidades` VALUES ('2062', '9', 'Hidrolina', 'GO');
            INSERT INTO `cidades` VALUES ('2063', '25', 'Holambra', 'SP');
            INSERT INTO `cidades` VALUES ('2064', '16', 'Honório Serpa', 'PR');
            INSERT INTO `cidades` VALUES ('2065', '6', 'Horizonte', 'CE');
            INSERT INTO `cidades` VALUES ('2066', '21', 'Horizontina', 'RS');
            INSERT INTO `cidades` VALUES ('2067', '25', 'Hortolândia', 'SP');
            INSERT INTO `cidades` VALUES ('2068', '18', 'Hugo Napoleão', 'PI');
            INSERT INTO `cidades` VALUES ('2069', '21', 'Hulha Negra', 'RS');
            INSERT INTO `cidades` VALUES ('2070', '4', 'Humaitá', 'AM');
            INSERT INTO `cidades` VALUES ('2071', '21', 'Humaitá', 'RS');
            INSERT INTO `cidades` VALUES ('2072', '10', 'Humberto de Campos', 'MA');
            INSERT INTO `cidades` VALUES ('2073', '25', 'Iacanga', 'SP');
            INSERT INTO `cidades` VALUES ('2074', '9', 'Iaciara', 'GO');
            INSERT INTO `cidades` VALUES ('2075', '25', 'Iacri', 'SP');
            INSERT INTO `cidades` VALUES ('2076', '5', 'Iaçu', 'BA');
            INSERT INTO `cidades` VALUES ('2077', '13', 'Iapu', 'MG');
            INSERT INTO `cidades` VALUES ('2078', '25', 'Iaras', 'SP');
            INSERT INTO `cidades` VALUES ('2079', '17', 'Iati', 'PE');
            INSERT INTO `cidades` VALUES ('2080', '16', 'Ibaiti', 'PR');
            INSERT INTO `cidades` VALUES ('2081', '21', 'Ibarama', 'RS');
            INSERT INTO `cidades` VALUES ('2082', '6', 'Ibaretama', 'CE');
            INSERT INTO `cidades` VALUES ('2083', '25', 'Ibaté', 'SP');
            INSERT INTO `cidades` VALUES ('2084', '2', 'Ibateguara', 'AL');
            INSERT INTO `cidades` VALUES ('2085', '8', 'Ibatiba', 'ES');
            INSERT INTO `cidades` VALUES ('2086', '16', 'Ibema', 'PR');
            INSERT INTO `cidades` VALUES ('2087', '13', 'Ibertioga', 'MG');
            INSERT INTO `cidades` VALUES ('2088', '13', 'Ibiá', 'MG');
            INSERT INTO `cidades` VALUES ('2089', '21', 'Ibiaçá', 'RS');
            INSERT INTO `cidades` VALUES ('2090', '13', 'Ibiaí', 'MG');
            INSERT INTO `cidades` VALUES ('2091', '24', 'Ibiam', 'SC');
            INSERT INTO `cidades` VALUES ('2092', '6', 'Ibiapina', 'CE');
            INSERT INTO `cidades` VALUES ('2093', '15', 'Ibiara', 'PB');
            INSERT INTO `cidades` VALUES ('2094', '5', 'Ibiassucê', 'BA');
            INSERT INTO `cidades` VALUES ('2095', '5', 'Ibicaraí', 'BA');
            INSERT INTO `cidades` VALUES ('2096', '24', 'Ibicaré', 'SC');
            INSERT INTO `cidades` VALUES ('2097', '5', 'Ibicoara', 'BA');
            INSERT INTO `cidades` VALUES ('2098', '5', 'Ibicuí', 'BA');
            INSERT INTO `cidades` VALUES ('2099', '6', 'Ibicuitinga', 'CE');
            INSERT INTO `cidades` VALUES ('2100', '17', 'Ibimirim', 'PE');
            INSERT INTO `cidades` VALUES ('2101', '5', 'Ibipeba', 'BA');
            INSERT INTO `cidades` VALUES ('2102', '5', 'Ibipitanga', 'BA');
            INSERT INTO `cidades` VALUES ('2103', '16', 'Ibiporã', 'PR');
            INSERT INTO `cidades` VALUES ('2104', '5', 'Ibiquera', 'BA');
            INSERT INTO `cidades` VALUES ('2105', '25', 'Ibirá', 'SP');
            INSERT INTO `cidades` VALUES ('2106', '13', 'Ibiracatu', 'MG');
            INSERT INTO `cidades` VALUES ('2107', '13', 'Ibiraci', 'MG');
            INSERT INTO `cidades` VALUES ('2108', '8', 'Ibiraçu', 'ES');
            INSERT INTO `cidades` VALUES ('2109', '21', 'Ibiraiaras', 'RS');
            INSERT INTO `cidades` VALUES ('2110', '17', 'Ibirajuba', 'PE');
            INSERT INTO `cidades` VALUES ('2111', '24', 'Ibirama', 'SC');
            INSERT INTO `cidades` VALUES ('2112', '5', 'Ibirapitanga', 'BA');
            INSERT INTO `cidades` VALUES ('2113', '5', 'Ibirapuã', 'BA');
            INSERT INTO `cidades` VALUES ('2114', '21', 'Ibirapuitã', 'RS');
            INSERT INTO `cidades` VALUES ('2115', '25', 'Ibirarema', 'SP');
            INSERT INTO `cidades` VALUES ('2116', '5', 'Ibirataia', 'BA');
            INSERT INTO `cidades` VALUES ('2117', '13', 'Ibirité', 'MG');
            INSERT INTO `cidades` VALUES ('2118', '21', 'Ibirubá', 'RS');
            INSERT INTO `cidades` VALUES ('2119', '5', 'Ibitiara', 'BA');
            INSERT INTO `cidades` VALUES ('2120', '25', 'Ibitinga', 'SP');
            INSERT INTO `cidades` VALUES ('2121', '8', 'Ibitirama', 'ES');
            INSERT INTO `cidades` VALUES ('2122', '5', 'Ibititá', 'BA');
            INSERT INTO `cidades` VALUES ('2123', '13', 'Ibitiúra de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2124', '13', 'Ibituruna', 'MG');
            INSERT INTO `cidades` VALUES ('2125', '25', 'Ibiúna', 'SP');
            INSERT INTO `cidades` VALUES ('2126', '5', 'Ibotirama', 'BA');
            INSERT INTO `cidades` VALUES ('2127', '6', 'Icapuí', 'CE');
            INSERT INTO `cidades` VALUES ('2128', '24', 'Içara', 'SC');
            INSERT INTO `cidades` VALUES ('2129', '13', 'Icaraí de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2130', '16', 'Icaraíma', 'PR');
            INSERT INTO `cidades` VALUES ('2131', '10', 'Icatu', 'MA');
            INSERT INTO `cidades` VALUES ('2132', '25', 'Icém', 'SP');
            INSERT INTO `cidades` VALUES ('2133', '5', 'Ichu', 'BA');
            INSERT INTO `cidades` VALUES ('2134', '6', 'Icó', 'CE');
            INSERT INTO `cidades` VALUES ('2135', '8', 'Iconha', 'ES');
            INSERT INTO `cidades` VALUES ('2136', '20', 'Ielmo Marinho', 'RN');
            INSERT INTO `cidades` VALUES ('2137', '25', 'Iepê', 'SP');
            INSERT INTO `cidades` VALUES ('2138', '2', 'Igaci', 'AL');
            INSERT INTO `cidades` VALUES ('2139', '5', 'Igaporã', 'BA');
            INSERT INTO `cidades` VALUES ('2140', '25', 'Igaraçu do Tietê', 'SP');
            INSERT INTO `cidades` VALUES ('2141', '15', 'Igaracy', 'PB');
            INSERT INTO `cidades` VALUES ('2142', '25', 'Igarapava', 'SP');
            INSERT INTO `cidades` VALUES ('2143', '13', 'Igarapé', 'MG');
            INSERT INTO `cidades` VALUES ('2144', '10', 'Igarapé do Meio', 'MA');
            INSERT INTO `cidades` VALUES ('2145', '10', 'Igarapé Grande', 'MA');
            INSERT INTO `cidades` VALUES ('2146', '14', 'Igarapé-Açu', 'PA');
            INSERT INTO `cidades` VALUES ('2147', '14', 'Igarapé-Miri', 'PA');
            INSERT INTO `cidades` VALUES ('2148', '17', 'Igarassu', 'PE');
            INSERT INTO `cidades` VALUES ('2149', '25', 'Igaratá', 'SP');
            INSERT INTO `cidades` VALUES ('2150', '13', 'Igaratinga', 'MG');
            INSERT INTO `cidades` VALUES ('2151', '5', 'Igrapiúna', 'BA');
            INSERT INTO `cidades` VALUES ('2152', '2', 'Igreja Nova', 'AL');
            INSERT INTO `cidades` VALUES ('2153', '21', 'Igrejinha', 'RS');
            INSERT INTO `cidades` VALUES ('2154', '19', 'Iguaba Grande', 'RJ');
            INSERT INTO `cidades` VALUES ('2155', '5', 'Iguaí', 'BA');
            INSERT INTO `cidades` VALUES ('2156', '25', 'Iguape', 'SP');
            INSERT INTO `cidades` VALUES ('2157', '17', 'Iguaraci', 'PE');
            INSERT INTO `cidades` VALUES ('2158', '16', 'Iguaraçu', 'PR');
            INSERT INTO `cidades` VALUES ('2159', '13', 'Iguatama', 'MG');
            INSERT INTO `cidades` VALUES ('2160', '12', 'Iguatemi', 'MS');
            INSERT INTO `cidades` VALUES ('2161', '6', 'Iguatu', 'CE');
            INSERT INTO `cidades` VALUES ('2162', '16', 'Iguatu', 'PR');
            INSERT INTO `cidades` VALUES ('2163', '13', 'Ijaci', 'MG');
            INSERT INTO `cidades` VALUES ('2164', '21', 'Ijuí', 'RS');
            INSERT INTO `cidades` VALUES ('2165', '25', 'Ilha Comprida', 'SP');
            INSERT INTO `cidades` VALUES ('2166', '26', 'Ilha das Flores', 'SE');
            INSERT INTO `cidades` VALUES ('2167', '17', 'Ilha de Itamaracá', 'PE');
            INSERT INTO `cidades` VALUES ('2168', '18', 'Ilha Grande', 'PI');
            INSERT INTO `cidades` VALUES ('2169', '25', 'Ilha Solteira', 'SP');
            INSERT INTO `cidades` VALUES ('2170', '25', 'Ilhabela', 'SP');
            INSERT INTO `cidades` VALUES ('2171', '5', 'Ilhéus', 'BA');
            INSERT INTO `cidades` VALUES ('2172', '24', 'Ilhota', 'SC');
            INSERT INTO `cidades` VALUES ('2173', '13', 'Ilicínea', 'MG');
            INSERT INTO `cidades` VALUES ('2174', '21', 'Ilópolis', 'RS');
            INSERT INTO `cidades` VALUES ('2175', '15', 'Imaculada', 'PB');
            INSERT INTO `cidades` VALUES ('2176', '24', 'Imaruí', 'SC');
            INSERT INTO `cidades` VALUES ('2177', '16', 'Imbaú', 'PR');
            INSERT INTO `cidades` VALUES ('2178', '21', 'Imbé', 'RS');
            INSERT INTO `cidades` VALUES ('2179', '13', 'Imbé de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2180', '24', 'Imbituba', 'SC');
            INSERT INTO `cidades` VALUES ('2181', '16', 'Imbituva', 'PR');
            INSERT INTO `cidades` VALUES ('2182', '24', 'Imbuia', 'SC');
            INSERT INTO `cidades` VALUES ('2183', '21', 'Imigrante', 'RS');
            INSERT INTO `cidades` VALUES ('2184', '10', 'Imperatriz', 'MA');
            INSERT INTO `cidades` VALUES ('2185', '16', 'Inácio Martins', 'PR');
            INSERT INTO `cidades` VALUES ('2186', '9', 'Inaciolândia', 'GO');
            INSERT INTO `cidades` VALUES ('2187', '17', 'Inajá', 'PE');
            INSERT INTO `cidades` VALUES ('2188', '16', 'Inajá', 'PR');
            INSERT INTO `cidades` VALUES ('2189', '13', 'Inconfidentes', 'MG');
            INSERT INTO `cidades` VALUES ('2190', '13', 'Indaiabira', 'MG');
            INSERT INTO `cidades` VALUES ('2191', '24', 'Indaial', 'SC');
            INSERT INTO `cidades` VALUES ('2192', '25', 'Indaiatuba', 'SP');
            INSERT INTO `cidades` VALUES ('2193', '6', 'Independência', 'CE');
            INSERT INTO `cidades` VALUES ('2194', '21', 'Independência', 'RS');
            INSERT INTO `cidades` VALUES ('2195', '25', 'Indiana', 'SP');
            INSERT INTO `cidades` VALUES ('2196', '13', 'Indianópolis', 'MG');
            INSERT INTO `cidades` VALUES ('2197', '16', 'Indianópolis', 'PR');
            INSERT INTO `cidades` VALUES ('2198', '25', 'Indiaporã', 'SP');
            INSERT INTO `cidades` VALUES ('2199', '9', 'Indiara', 'GO');
            INSERT INTO `cidades` VALUES ('2200', '26', 'Indiaroba', 'SE');
            INSERT INTO `cidades` VALUES ('2201', '11', 'Indiavaí', 'MT');
            INSERT INTO `cidades` VALUES ('2202', '15', 'Ingá', 'PB');
            INSERT INTO `cidades` VALUES ('2203', '13', 'Ingaí', 'MG');
            INSERT INTO `cidades` VALUES ('2204', '17', 'Ingazeira', 'PE');
            INSERT INTO `cidades` VALUES ('2205', '21', 'Inhacorá', 'RS');
            INSERT INTO `cidades` VALUES ('2206', '5', 'Inhambupe', 'BA');
            INSERT INTO `cidades` VALUES ('2207', '14', 'Inhangapi', 'PA');
            INSERT INTO `cidades` VALUES ('2208', '2', 'Inhapi', 'AL');
            INSERT INTO `cidades` VALUES ('2209', '13', 'Inhapim', 'MG');
            INSERT INTO `cidades` VALUES ('2210', '13', 'Inhaúma', 'MG');
            INSERT INTO `cidades` VALUES ('2211', '18', 'Inhuma', 'PI');
            INSERT INTO `cidades` VALUES ('2212', '9', 'Inhumas', 'GO');
            INSERT INTO `cidades` VALUES ('2213', '13', 'Inimutaba', 'MG');
            INSERT INTO `cidades` VALUES ('2214', '12', 'Inocência', 'MS');
            INSERT INTO `cidades` VALUES ('2215', '25', 'Inúbia Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('2216', '24', 'Iomerê', 'SC');
            INSERT INTO `cidades` VALUES ('2217', '13', 'Ipaba', 'MG');
            INSERT INTO `cidades` VALUES ('2218', '9', 'Ipameri', 'GO');
            INSERT INTO `cidades` VALUES ('2219', '13', 'Ipanema', 'MG');
            INSERT INTO `cidades` VALUES ('2220', '20', 'Ipanguaçu', 'RN');
            INSERT INTO `cidades` VALUES ('2221', '6', 'Ipaporanga', 'CE');
            INSERT INTO `cidades` VALUES ('2222', '13', 'Ipatinga', 'MG');
            INSERT INTO `cidades` VALUES ('2223', '6', 'Ipaumirim', 'CE');
            INSERT INTO `cidades` VALUES ('2224', '25', 'Ipaussu', 'SP');
            INSERT INTO `cidades` VALUES ('2225', '21', 'Ipê', 'RS');
            INSERT INTO `cidades` VALUES ('2226', '5', 'Ipecaetá', 'BA');
            INSERT INTO `cidades` VALUES ('2227', '25', 'Iperó', 'SP');
            INSERT INTO `cidades` VALUES ('2228', '25', 'Ipeúna', 'SP');
            INSERT INTO `cidades` VALUES ('2229', '13', 'Ipiaçu', 'MG');
            INSERT INTO `cidades` VALUES ('2230', '5', 'Ipiaú', 'BA');
            INSERT INTO `cidades` VALUES ('2231', '25', 'Ipiguá', 'SP');
            INSERT INTO `cidades` VALUES ('2232', '24', 'Ipira', 'SC');
            INSERT INTO `cidades` VALUES ('2233', '5', 'Ipirá', 'BA');
            INSERT INTO `cidades` VALUES ('2234', '16', 'Ipiranga', 'PR');
            INSERT INTO `cidades` VALUES ('2235', '9', 'Ipiranga de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('2236', '11', 'Ipiranga do Norte', 'MT');
            INSERT INTO `cidades` VALUES ('2237', '18', 'Ipiranga do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('2238', '21', 'Ipiranga do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('2239', '4', 'Ipixuna', 'AM');
            INSERT INTO `cidades` VALUES ('2240', '14', 'Ipixuna do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('2241', '17', 'Ipojuca', 'PE');
            INSERT INTO `cidades` VALUES ('2242', '9', 'Iporá', 'GO');
            INSERT INTO `cidades` VALUES ('2243', '16', 'Iporã', 'PR');
            INSERT INTO `cidades` VALUES ('2244', '24', 'Iporã do Oeste', 'SC');
            INSERT INTO `cidades` VALUES ('2245', '25', 'Iporanga', 'SP');
            INSERT INTO `cidades` VALUES ('2246', '6', 'Ipu', 'CE');
            INSERT INTO `cidades` VALUES ('2247', '25', 'Ipuã', 'SP');
            INSERT INTO `cidades` VALUES ('2248', '24', 'Ipuaçu', 'SC');
            INSERT INTO `cidades` VALUES ('2249', '17', 'Ipubi', 'PE');
            INSERT INTO `cidades` VALUES ('2250', '20', 'Ipueira', 'RN');
            INSERT INTO `cidades` VALUES ('2251', '6', 'Ipueiras', 'CE');
            INSERT INTO `cidades` VALUES ('2252', '27', 'Ipueiras', 'TO');
            INSERT INTO `cidades` VALUES ('2253', '13', 'Ipuiúna', 'MG');
            INSERT INTO `cidades` VALUES ('2254', '24', 'Ipumirim', 'SC');
            INSERT INTO `cidades` VALUES ('2255', '5', 'Ipupiara', 'BA');
            INSERT INTO `cidades` VALUES ('2256', '6', 'Iracema', 'CE');
            INSERT INTO `cidades` VALUES ('2257', '23', 'Iracema', 'RR');
            INSERT INTO `cidades` VALUES ('2258', '16', 'Iracema do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('2259', '25', 'Iracemápolis', 'SP');
            INSERT INTO `cidades` VALUES ('2260', '24', 'Iraceminha', 'SC');
            INSERT INTO `cidades` VALUES ('2261', '21', 'Iraí', 'RS');
            INSERT INTO `cidades` VALUES ('2262', '13', 'Iraí de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2263', '5', 'Irajuba', 'BA');
            INSERT INTO `cidades` VALUES ('2264', '5', 'Iramaia', 'BA');
            INSERT INTO `cidades` VALUES ('2265', '4', 'Iranduba', 'AM');
            INSERT INTO `cidades` VALUES ('2266', '24', 'Irani', 'SC');
            INSERT INTO `cidades` VALUES ('2267', '25', 'Irapuã', 'SP');
            INSERT INTO `cidades` VALUES ('2268', '25', 'Irapuru', 'SP');
            INSERT INTO `cidades` VALUES ('2269', '5', 'Iraquara', 'BA');
            INSERT INTO `cidades` VALUES ('2270', '5', 'Irará', 'BA');
            INSERT INTO `cidades` VALUES ('2271', '16', 'Irati', 'PR');
            INSERT INTO `cidades` VALUES ('2272', '24', 'Irati', 'SC');
            INSERT INTO `cidades` VALUES ('2273', '6', 'Irauçuba', 'CE');
            INSERT INTO `cidades` VALUES ('2274', '5', 'Irecê', 'BA');
            INSERT INTO `cidades` VALUES ('2275', '16', 'Iretama', 'PR');
            INSERT INTO `cidades` VALUES ('2276', '24', 'Irineópolis', 'SC');
            INSERT INTO `cidades` VALUES ('2277', '14', 'Irituia', 'PA');
            INSERT INTO `cidades` VALUES ('2278', '8', 'Irupi', 'ES');
            INSERT INTO `cidades` VALUES ('2279', '18', 'Isaías Coelho', 'PI');
            INSERT INTO `cidades` VALUES ('2280', '9', 'Israelândia', 'GO');
            INSERT INTO `cidades` VALUES ('2281', '24', 'Itá', 'SC');
            INSERT INTO `cidades` VALUES ('2282', '21', 'Itaara', 'RS');
            INSERT INTO `cidades` VALUES ('2283', '15', 'Itabaiana', 'PB');
            INSERT INTO `cidades` VALUES ('2284', '26', 'Itabaiana', 'SE');
            INSERT INTO `cidades` VALUES ('2285', '26', 'Itabaianinha', 'SE');
            INSERT INTO `cidades` VALUES ('2286', '5', 'Itabela', 'BA');
            INSERT INTO `cidades` VALUES ('2287', '25', 'Itaberá', 'SP');
            INSERT INTO `cidades` VALUES ('2288', '5', 'Itaberaba', 'BA');
            INSERT INTO `cidades` VALUES ('2289', '9', 'Itaberaí', 'GO');
            INSERT INTO `cidades` VALUES ('2290', '26', 'Itabi', 'SE');
            INSERT INTO `cidades` VALUES ('2291', '13', 'Itabira', 'MG');
            INSERT INTO `cidades` VALUES ('2292', '13', 'Itabirinha', 'MG');
            INSERT INTO `cidades` VALUES ('2293', '13', 'Itabirito', 'MG');
            INSERT INTO `cidades` VALUES ('2294', '19', 'Itaboraí', 'RJ');
            INSERT INTO `cidades` VALUES ('2295', '5', 'Itabuna', 'BA');
            INSERT INTO `cidades` VALUES ('2296', '27', 'Itacajá', 'TO');
            INSERT INTO `cidades` VALUES ('2297', '13', 'Itacambira', 'MG');
            INSERT INTO `cidades` VALUES ('2298', '13', 'Itacarambi', 'MG');
            INSERT INTO `cidades` VALUES ('2299', '5', 'Itacaré', 'BA');
            INSERT INTO `cidades` VALUES ('2300', '4', 'Itacoatiara', 'AM');
            INSERT INTO `cidades` VALUES ('2301', '17', 'Itacuruba', 'PE');
            INSERT INTO `cidades` VALUES ('2302', '21', 'Itacurubi', 'RS');
            INSERT INTO `cidades` VALUES ('2303', '5', 'Itaeté', 'BA');
            INSERT INTO `cidades` VALUES ('2304', '5', 'Itagi', 'BA');
            INSERT INTO `cidades` VALUES ('2305', '5', 'Itagibá', 'BA');
            INSERT INTO `cidades` VALUES ('2306', '5', 'Itagimirim', 'BA');
            INSERT INTO `cidades` VALUES ('2307', '8', 'Itaguaçu', 'ES');
            INSERT INTO `cidades` VALUES ('2308', '5', 'Itaguaçu da Bahia', 'BA');
            INSERT INTO `cidades` VALUES ('2309', '19', 'Itaguaí', 'RJ');
            INSERT INTO `cidades` VALUES ('2310', '16', 'Itaguajé', 'PR');
            INSERT INTO `cidades` VALUES ('2311', '13', 'Itaguara', 'MG');
            INSERT INTO `cidades` VALUES ('2312', '9', 'Itaguari', 'GO');
            INSERT INTO `cidades` VALUES ('2313', '9', 'Itaguaru', 'GO');
            INSERT INTO `cidades` VALUES ('2314', '27', 'Itaguatins', 'TO');
            INSERT INTO `cidades` VALUES ('2315', '25', 'Itaí', 'SP');
            INSERT INTO `cidades` VALUES ('2316', '17', 'Itaíba', 'PE');
            INSERT INTO `cidades` VALUES ('2317', '6', 'Itaiçaba', 'CE');
            INSERT INTO `cidades` VALUES ('2318', '18', 'Itainópolis', 'PI');
            INSERT INTO `cidades` VALUES ('2319', '24', 'Itaiópolis', 'SC');
            INSERT INTO `cidades` VALUES ('2320', '10', 'Itaipava do Grajaú', 'MA');
            INSERT INTO `cidades` VALUES ('2321', '13', 'Itaipé', 'MG');
            INSERT INTO `cidades` VALUES ('2322', '16', 'Itaipulândia', 'PR');
            INSERT INTO `cidades` VALUES ('2323', '6', 'Itaitinga', 'CE');
            INSERT INTO `cidades` VALUES ('2324', '14', 'Itaituba', 'PA');
            INSERT INTO `cidades` VALUES ('2325', '9', 'Itajá', 'GO');
            INSERT INTO `cidades` VALUES ('2326', '20', 'Itajá', 'RN');
            INSERT INTO `cidades` VALUES ('2327', '24', 'Itajaí', 'SC');
            INSERT INTO `cidades` VALUES ('2328', '25', 'Itajobi', 'SP');
            INSERT INTO `cidades` VALUES ('2329', '25', 'Itaju', 'SP');
            INSERT INTO `cidades` VALUES ('2330', '5', 'Itaju do Colônia', 'BA');
            INSERT INTO `cidades` VALUES ('2331', '13', 'Itajubá', 'MG');
            INSERT INTO `cidades` VALUES ('2332', '5', 'Itajuípe', 'BA');
            INSERT INTO `cidades` VALUES ('2333', '19', 'Italva', 'RJ');
            INSERT INTO `cidades` VALUES ('2334', '5', 'Itamaraju', 'BA');
            INSERT INTO `cidades` VALUES ('2335', '13', 'Itamarandiba', 'MG');
            INSERT INTO `cidades` VALUES ('2336', '4', 'Itamarati', 'AM');
            INSERT INTO `cidades` VALUES ('2337', '13', 'Itamarati de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2338', '5', 'Itamari', 'BA');
            INSERT INTO `cidades` VALUES ('2339', '13', 'Itambacuri', 'MG');
            INSERT INTO `cidades` VALUES ('2340', '16', 'Itambaracá', 'PR');
            INSERT INTO `cidades` VALUES ('2341', '5', 'Itambé', 'BA');
            INSERT INTO `cidades` VALUES ('2342', '17', 'Itambé', 'PE');
            INSERT INTO `cidades` VALUES ('2343', '16', 'Itambé', 'PR');
            INSERT INTO `cidades` VALUES ('2344', '13', 'Itambé do Mato Dentro', 'MG');
            INSERT INTO `cidades` VALUES ('2345', '13', 'Itamogi', 'MG');
            INSERT INTO `cidades` VALUES ('2346', '13', 'Itamonte', 'MG');
            INSERT INTO `cidades` VALUES ('2347', '5', 'Itanagra', 'BA');
            INSERT INTO `cidades` VALUES ('2348', '25', 'Itanhaém', 'SP');
            INSERT INTO `cidades` VALUES ('2349', '13', 'Itanhandu', 'MG');
            INSERT INTO `cidades` VALUES ('2350', '11', 'Itanhangá', 'MT');
            INSERT INTO `cidades` VALUES ('2351', '5', 'Itanhém', 'BA');
            INSERT INTO `cidades` VALUES ('2352', '13', 'Itanhomi', 'MG');
            INSERT INTO `cidades` VALUES ('2353', '13', 'Itaobim', 'MG');
            INSERT INTO `cidades` VALUES ('2354', '25', 'Itaóca', 'SP');
            INSERT INTO `cidades` VALUES ('2355', '19', 'Itaocara', 'RJ');
            INSERT INTO `cidades` VALUES ('2356', '9', 'Itapaci', 'GO');
            INSERT INTO `cidades` VALUES ('2357', '6', 'Itapagé', 'CE');
            INSERT INTO `cidades` VALUES ('2358', '13', 'Itapagipe', 'MG');
            INSERT INTO `cidades` VALUES ('2359', '5', 'Itaparica', 'BA');
            INSERT INTO `cidades` VALUES ('2360', '5', 'Itapé', 'BA');
            INSERT INTO `cidades` VALUES ('2361', '5', 'Itapebi', 'BA');
            INSERT INTO `cidades` VALUES ('2362', '13', 'Itapecerica', 'MG');
            INSERT INTO `cidades` VALUES ('2363', '25', 'Itapecerica da Serra', 'SP');
            INSERT INTO `cidades` VALUES ('2364', '10', 'Itapecuru Mirim', 'MA');
            INSERT INTO `cidades` VALUES ('2365', '16', 'Itapejara d\'Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('2366', '24', 'Itapema', 'SC');
            INSERT INTO `cidades` VALUES ('2367', '8', 'Itapemirim', 'ES');
            INSERT INTO `cidades` VALUES ('2368', '16', 'Itaperuçu', 'PR');
            INSERT INTO `cidades` VALUES ('2369', '19', 'Itaperuna', 'RJ');
            INSERT INTO `cidades` VALUES ('2370', '17', 'Itapetim', 'PE');
            INSERT INTO `cidades` VALUES ('2371', '5', 'Itapetinga', 'BA');
            INSERT INTO `cidades` VALUES ('2372', '25', 'Itapetininga', 'SP');
            INSERT INTO `cidades` VALUES ('2373', '13', 'Itapeva', 'MG');
            INSERT INTO `cidades` VALUES ('2374', '25', 'Itapeva', 'SP');
            INSERT INTO `cidades` VALUES ('2375', '25', 'Itapevi', 'SP');
            INSERT INTO `cidades` VALUES ('2376', '5', 'Itapicuru', 'BA');
            INSERT INTO `cidades` VALUES ('2377', '6', 'Itapipoca', 'CE');
            INSERT INTO `cidades` VALUES ('2378', '25', 'Itapira', 'SP');
            INSERT INTO `cidades` VALUES ('2379', '4', 'Itapiranga', 'AM');
            INSERT INTO `cidades` VALUES ('2380', '24', 'Itapiranga', 'SC');
            INSERT INTO `cidades` VALUES ('2381', '9', 'Itapirapuã', 'GO');
            INSERT INTO `cidades` VALUES ('2382', '25', 'Itapirapuã Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('2383', '27', 'Itapiratins', 'TO');
            INSERT INTO `cidades` VALUES ('2384', '17', 'Itapissuma', 'PE');
            INSERT INTO `cidades` VALUES ('2385', '5', 'Itapitanga', 'BA');
            INSERT INTO `cidades` VALUES ('2386', '6', 'Itapiúna', 'CE');
            INSERT INTO `cidades` VALUES ('2387', '24', 'Itapoá', 'SC');
            INSERT INTO `cidades` VALUES ('2388', '25', 'Itápolis', 'SP');
            INSERT INTO `cidades` VALUES ('2389', '12', 'Itaporã', 'MS');
            INSERT INTO `cidades` VALUES ('2390', '27', 'Itaporã do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('2391', '15', 'Itaporanga', 'PB');
            INSERT INTO `cidades` VALUES ('2392', '25', 'Itaporanga', 'SP');
            INSERT INTO `cidades` VALUES ('2393', '26', 'Itaporanga d\'Ajuda', 'SE');
            INSERT INTO `cidades` VALUES ('2394', '15', 'Itapororoca', 'PB');
            INSERT INTO `cidades` VALUES ('2395', '22', 'Itapuã do Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('2396', '21', 'Itapuca', 'RS');
            INSERT INTO `cidades` VALUES ('2397', '25', 'Itapuí', 'SP');
            INSERT INTO `cidades` VALUES ('2398', '25', 'Itapura', 'SP');
            INSERT INTO `cidades` VALUES ('2399', '9', 'Itapuranga', 'GO');
            INSERT INTO `cidades` VALUES ('2400', '25', 'Itaquaquecetuba', 'SP');
            INSERT INTO `cidades` VALUES ('2401', '5', 'Itaquara', 'BA');
            INSERT INTO `cidades` VALUES ('2402', '21', 'Itaqui', 'RS');
            INSERT INTO `cidades` VALUES ('2403', '12', 'Itaquiraí', 'MS');
            INSERT INTO `cidades` VALUES ('2404', '17', 'Itaquitinga', 'PE');
            INSERT INTO `cidades` VALUES ('2405', '8', 'Itarana', 'ES');
            INSERT INTO `cidades` VALUES ('2406', '5', 'Itarantim', 'BA');
            INSERT INTO `cidades` VALUES ('2407', '25', 'Itararé', 'SP');
            INSERT INTO `cidades` VALUES ('2408', '6', 'Itarema', 'CE');
            INSERT INTO `cidades` VALUES ('2409', '25', 'Itariri', 'SP');
            INSERT INTO `cidades` VALUES ('2410', '9', 'Itarumã', 'GO');
            INSERT INTO `cidades` VALUES ('2411', '21', 'Itati', 'RS');
            INSERT INTO `cidades` VALUES ('2412', '19', 'Itatiaia', 'RJ');
            INSERT INTO `cidades` VALUES ('2413', '13', 'Itatiaiuçu', 'MG');
            INSERT INTO `cidades` VALUES ('2414', '25', 'Itatiba', 'SP');
            INSERT INTO `cidades` VALUES ('2415', '21', 'Itatiba do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('2416', '5', 'Itatim', 'BA');
            INSERT INTO `cidades` VALUES ('2417', '25', 'Itatinga', 'SP');
            INSERT INTO `cidades` VALUES ('2418', '6', 'Itatira', 'CE');
            INSERT INTO `cidades` VALUES ('2419', '15', 'Itatuba', 'PB');
            INSERT INTO `cidades` VALUES ('2420', '20', 'Itaú', 'RN');
            INSERT INTO `cidades` VALUES ('2421', '13', 'Itaú de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2422', '11', 'Itaúba', 'MT');
            INSERT INTO `cidades` VALUES ('2423', '3', 'Itaubal', 'AP');
            INSERT INTO `cidades` VALUES ('2424', '9', 'Itauçu', 'GO');
            INSERT INTO `cidades` VALUES ('2425', '18', 'Itaueira', 'PI');
            INSERT INTO `cidades` VALUES ('2426', '13', 'Itaúna', 'MG');
            INSERT INTO `cidades` VALUES ('2427', '16', 'Itaúna do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('2428', '13', 'Itaverava', 'MG');
            INSERT INTO `cidades` VALUES ('2429', '13', 'Itinga', 'MG');
            INSERT INTO `cidades` VALUES ('2430', '10', 'Itinga do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('2431', '11', 'Itiquira', 'MT');
            INSERT INTO `cidades` VALUES ('2432', '25', 'Itirapina', 'SP');
            INSERT INTO `cidades` VALUES ('2433', '25', 'Itirapuã', 'SP');
            INSERT INTO `cidades` VALUES ('2434', '5', 'Itiruçu', 'BA');
            INSERT INTO `cidades` VALUES ('2435', '5', 'Itiúba', 'BA');
            INSERT INTO `cidades` VALUES ('2436', '25', 'Itobi', 'SP');
            INSERT INTO `cidades` VALUES ('2437', '5', 'Itororó', 'BA');
            INSERT INTO `cidades` VALUES ('2438', '25', 'Itu', 'SP');
            INSERT INTO `cidades` VALUES ('2439', '5', 'Ituaçu', 'BA');
            INSERT INTO `cidades` VALUES ('2440', '5', 'Ituberá', 'BA');
            INSERT INTO `cidades` VALUES ('2441', '13', 'Itueta', 'MG');
            INSERT INTO `cidades` VALUES ('2442', '13', 'Ituiutaba', 'MG');
            INSERT INTO `cidades` VALUES ('2443', '9', 'Itumbiara', 'GO');
            INSERT INTO `cidades` VALUES ('2444', '13', 'Itumirim', 'MG');
            INSERT INTO `cidades` VALUES ('2445', '25', 'Itupeva', 'SP');
            INSERT INTO `cidades` VALUES ('2446', '14', 'Itupiranga', 'PA');
            INSERT INTO `cidades` VALUES ('2447', '24', 'Ituporanga', 'SC');
            INSERT INTO `cidades` VALUES ('2448', '13', 'Iturama', 'MG');
            INSERT INTO `cidades` VALUES ('2449', '13', 'Itutinga', 'MG');
            INSERT INTO `cidades` VALUES ('2450', '25', 'Ituverava', 'SP');
            INSERT INTO `cidades` VALUES ('2451', '5', 'Iuiú', 'BA');
            INSERT INTO `cidades` VALUES ('2452', '8', 'Iúna', 'ES');
            INSERT INTO `cidades` VALUES ('2453', '16', 'Ivaí', 'PR');
            INSERT INTO `cidades` VALUES ('2454', '16', 'Ivaiporã', 'PR');
            INSERT INTO `cidades` VALUES ('2455', '16', 'Ivaté', 'PR');
            INSERT INTO `cidades` VALUES ('2456', '16', 'Ivatuba', 'PR');
            INSERT INTO `cidades` VALUES ('2457', '12', 'Ivinhema', 'MS');
            INSERT INTO `cidades` VALUES ('2458', '9', 'Ivolândia', 'GO');
            INSERT INTO `cidades` VALUES ('2459', '21', 'Ivorá', 'RS');
            INSERT INTO `cidades` VALUES ('2460', '21', 'Ivoti', 'RS');
            INSERT INTO `cidades` VALUES ('2461', '17', 'Jaboatão dos Guararapes', 'PE');
            INSERT INTO `cidades` VALUES ('2462', '24', 'Jaborá', 'SC');
            INSERT INTO `cidades` VALUES ('2463', '5', 'Jaborandi', 'BA');
            INSERT INTO `cidades` VALUES ('2464', '25', 'Jaborandi', 'SP');
            INSERT INTO `cidades` VALUES ('2465', '16', 'Jaboti', 'PR');
            INSERT INTO `cidades` VALUES ('2466', '21', 'Jaboticaba', 'RS');
            INSERT INTO `cidades` VALUES ('2467', '25', 'Jaboticabal', 'SP');
            INSERT INTO `cidades` VALUES ('2468', '13', 'Jaboticatubas', 'MG');
            INSERT INTO `cidades` VALUES ('2469', '20', 'Jaçanã', 'RN');
            INSERT INTO `cidades` VALUES ('2470', '5', 'Jacaraci', 'BA');
            INSERT INTO `cidades` VALUES ('2471', '15', 'Jacaraú', 'PB');
            INSERT INTO `cidades` VALUES ('2472', '2', 'Jacaré dos Homens', 'AL');
            INSERT INTO `cidades` VALUES ('2473', '14', 'Jacareacanga', 'PA');
            INSERT INTO `cidades` VALUES ('2474', '25', 'Jacareí', 'SP');
            INSERT INTO `cidades` VALUES ('2475', '16', 'Jacarezinho', 'PR');
            INSERT INTO `cidades` VALUES ('2476', '25', 'Jaci', 'SP');
            INSERT INTO `cidades` VALUES ('2477', '11', 'Jaciara', 'MT');
            INSERT INTO `cidades` VALUES ('2478', '13', 'Jacinto', 'MG');
            INSERT INTO `cidades` VALUES ('2479', '24', 'Jacinto Machado', 'SC');
            INSERT INTO `cidades` VALUES ('2480', '5', 'Jacobina', 'BA');
            INSERT INTO `cidades` VALUES ('2481', '18', 'Jacobina do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('2482', '13', 'Jacuí', 'MG');
            INSERT INTO `cidades` VALUES ('2483', '2', 'Jacuípe', 'AL');
            INSERT INTO `cidades` VALUES ('2484', '21', 'Jacuizinho', 'RS');
            INSERT INTO `cidades` VALUES ('2485', '14', 'Jacundá', 'PA');
            INSERT INTO `cidades` VALUES ('2486', '25', 'Jacupiranga', 'SP');
            INSERT INTO `cidades` VALUES ('2487', '13', 'Jacutinga', 'MG');
            INSERT INTO `cidades` VALUES ('2488', '21', 'Jacutinga', 'RS');
            INSERT INTO `cidades` VALUES ('2489', '16', 'Jaguapitã', 'PR');
            INSERT INTO `cidades` VALUES ('2490', '5', 'Jaguaquara', 'BA');
            INSERT INTO `cidades` VALUES ('2491', '13', 'Jaguaraçu', 'MG');
            INSERT INTO `cidades` VALUES ('2492', '21', 'Jaguarão', 'RS');
            INSERT INTO `cidades` VALUES ('2493', '5', 'Jaguarari', 'BA');
            INSERT INTO `cidades` VALUES ('2494', '8', 'Jaguaré', 'ES');
            INSERT INTO `cidades` VALUES ('2495', '6', 'Jaguaretama', 'CE');
            INSERT INTO `cidades` VALUES ('2496', '21', 'Jaguari', 'RS');
            INSERT INTO `cidades` VALUES ('2497', '16', 'Jaguariaíva', 'PR');
            INSERT INTO `cidades` VALUES ('2498', '6', 'Jaguaribara', 'CE');
            INSERT INTO `cidades` VALUES ('2499', '6', 'Jaguaribe', 'CE');
            INSERT INTO `cidades` VALUES ('2500', '5', 'Jaguaripe', 'BA');
            INSERT INTO `cidades` VALUES ('2501', '25', 'Jaguariúna', 'SP');
            INSERT INTO `cidades` VALUES ('2502', '6', 'Jaguaruana', 'CE');
            INSERT INTO `cidades` VALUES ('2503', '24', 'Jaguaruna', 'SC');
            INSERT INTO `cidades` VALUES ('2504', '13', 'Jaíba', 'MG');
            INSERT INTO `cidades` VALUES ('2505', '18', 'Jaicós', 'PI');
            INSERT INTO `cidades` VALUES ('2506', '25', 'Jales', 'SP');
            INSERT INTO `cidades` VALUES ('2507', '25', 'Jambeiro', 'SP');
            INSERT INTO `cidades` VALUES ('2508', '13', 'Jampruca', 'MG');
            INSERT INTO `cidades` VALUES ('2509', '13', 'Janaúba', 'MG');
            INSERT INTO `cidades` VALUES ('2510', '9', 'Jandaia', 'GO');
            INSERT INTO `cidades` VALUES ('2511', '16', 'Jandaia do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('2512', '5', 'Jandaíra', 'BA');
            INSERT INTO `cidades` VALUES ('2513', '20', 'Jandaíra', 'RN');
            INSERT INTO `cidades` VALUES ('2514', '25', 'Jandira', 'SP');
            INSERT INTO `cidades` VALUES ('2515', '20', 'Janduís', 'RN');
            INSERT INTO `cidades` VALUES ('2516', '11', 'Jangada', 'MT');
            INSERT INTO `cidades` VALUES ('2517', '16', 'Janiópolis', 'PR');
            INSERT INTO `cidades` VALUES ('2518', '13', 'Januária', 'MG');
            INSERT INTO `cidades` VALUES ('2519', '20', 'Januário Cicco', 'RN');
            INSERT INTO `cidades` VALUES ('2520', '13', 'Japaraíba', 'MG');
            INSERT INTO `cidades` VALUES ('2521', '2', 'Japaratinga', 'AL');
            INSERT INTO `cidades` VALUES ('2522', '26', 'Japaratuba', 'SE');
            INSERT INTO `cidades` VALUES ('2523', '19', 'Japeri', 'RJ');
            INSERT INTO `cidades` VALUES ('2524', '20', 'Japi', 'RN');
            INSERT INTO `cidades` VALUES ('2525', '16', 'Japira', 'PR');
            INSERT INTO `cidades` VALUES ('2526', '26', 'Japoatã', 'SE');
            INSERT INTO `cidades` VALUES ('2527', '13', 'Japonvar', 'MG');
            INSERT INTO `cidades` VALUES ('2528', '12', 'Japorã', 'MS');
            INSERT INTO `cidades` VALUES ('2529', '4', 'Japurá', 'AM');
            INSERT INTO `cidades` VALUES ('2530', '16', 'Japurá', 'PR');
            INSERT INTO `cidades` VALUES ('2531', '17', 'Jaqueira', 'PE');
            INSERT INTO `cidades` VALUES ('2532', '21', 'Jaquirana', 'RS');
            INSERT INTO `cidades` VALUES ('2533', '9', 'Jaraguá', 'GO');
            INSERT INTO `cidades` VALUES ('2534', '24', 'Jaraguá do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('2535', '12', 'Jaraguari', 'MS');
            INSERT INTO `cidades` VALUES ('2536', '2', 'Jaramataia', 'AL');
            INSERT INTO `cidades` VALUES ('2537', '6', 'Jardim', 'CE');
            INSERT INTO `cidades` VALUES ('2538', '12', 'Jardim', 'MS');
            INSERT INTO `cidades` VALUES ('2539', '16', 'Jardim Alegre', 'PR');
            INSERT INTO `cidades` VALUES ('2540', '20', 'Jardim de Angicos', 'RN');
            INSERT INTO `cidades` VALUES ('2541', '20', 'Jardim de Piranhas', 'RN');
            INSERT INTO `cidades` VALUES ('2542', '18', 'Jardim do Mulato', 'PI');
            INSERT INTO `cidades` VALUES ('2543', '20', 'Jardim do Seridó', 'RN');
            INSERT INTO `cidades` VALUES ('2544', '16', 'Jardim Olinda', 'PR');
            INSERT INTO `cidades` VALUES ('2545', '24', 'Jardinópolis', 'SC');
            INSERT INTO `cidades` VALUES ('2546', '25', 'Jardinópolis', 'SP');
            INSERT INTO `cidades` VALUES ('2547', '21', 'Jari', 'RS');
            INSERT INTO `cidades` VALUES ('2548', '25', 'Jarinu', 'SP');
            INSERT INTO `cidades` VALUES ('2549', '22', 'Jaru', 'RO');
            INSERT INTO `cidades` VALUES ('2550', '9', 'Jataí', 'GO');
            INSERT INTO `cidades` VALUES ('2551', '16', 'Jataizinho', 'PR');
            INSERT INTO `cidades` VALUES ('2552', '17', 'Jataúba', 'PE');
            INSERT INTO `cidades` VALUES ('2553', '12', 'Jateí', 'MS');
            INSERT INTO `cidades` VALUES ('2554', '6', 'Jati', 'CE');
            INSERT INTO `cidades` VALUES ('2555', '10', 'Jatobá', 'MA');
            INSERT INTO `cidades` VALUES ('2556', '17', 'Jatobá', 'PE');
            INSERT INTO `cidades` VALUES ('2557', '18', 'Jatobá do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('2558', '25', 'Jaú', 'SP');
            INSERT INTO `cidades` VALUES ('2559', '27', 'Jaú do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('2560', '9', 'Jaupaci', 'GO');
            INSERT INTO `cidades` VALUES ('2561', '11', 'Jauru', 'MT');
            INSERT INTO `cidades` VALUES ('2562', '13', 'Jeceaba', 'MG');
            INSERT INTO `cidades` VALUES ('2563', '13', 'Jenipapo de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2564', '10', 'Jenipapo dos Vieiras', 'MA');
            INSERT INTO `cidades` VALUES ('2565', '13', 'Jequeri', 'MG');
            INSERT INTO `cidades` VALUES ('2566', '2', 'Jequiá da Praia', 'AL');
            INSERT INTO `cidades` VALUES ('2567', '5', 'Jequié', 'BA');
            INSERT INTO `cidades` VALUES ('2568', '13', 'Jequitaí', 'MG');
            INSERT INTO `cidades` VALUES ('2569', '13', 'Jequitibá', 'MG');
            INSERT INTO `cidades` VALUES ('2570', '13', 'Jequitinhonha', 'MG');
            INSERT INTO `cidades` VALUES ('2571', '5', 'Jeremoabo', 'BA');
            INSERT INTO `cidades` VALUES ('2572', '15', 'Jericó', 'PB');
            INSERT INTO `cidades` VALUES ('2573', '25', 'Jeriquara', 'SP');
            INSERT INTO `cidades` VALUES ('2574', '8', 'Jerônimo Monteiro', 'ES');
            INSERT INTO `cidades` VALUES ('2575', '18', 'Jerumenha', 'PI');
            INSERT INTO `cidades` VALUES ('2576', '13', 'Jesuânia', 'MG');
            INSERT INTO `cidades` VALUES ('2577', '16', 'Jesuítas', 'PR');
            INSERT INTO `cidades` VALUES ('2578', '9', 'Jesúpolis', 'GO');
            INSERT INTO `cidades` VALUES ('2579', '6', 'Jijoca de Jericoacoara', 'CE');
            INSERT INTO `cidades` VALUES ('2580', '22', 'Ji-Paraná', 'RO');
            INSERT INTO `cidades` VALUES ('2581', '5', 'Jiquiriçá', 'BA');
            INSERT INTO `cidades` VALUES ('2582', '5', 'Jitaúna', 'BA');
            INSERT INTO `cidades` VALUES ('2583', '24', 'Joaçaba', 'SC');
            INSERT INTO `cidades` VALUES ('2584', '13', 'Joaíma', 'MG');
            INSERT INTO `cidades` VALUES ('2585', '13', 'Joanésia', 'MG');
            INSERT INTO `cidades` VALUES ('2586', '25', 'Joanópolis', 'SP');
            INSERT INTO `cidades` VALUES ('2587', '17', 'João Alfredo', 'PE');
            INSERT INTO `cidades` VALUES ('2588', '20', 'João Câmara', 'RN');
            INSERT INTO `cidades` VALUES ('2589', '18', 'João Costa', 'PI');
            INSERT INTO `cidades` VALUES ('2590', '20', 'João Dias', 'RN');
            INSERT INTO `cidades` VALUES ('2591', '5', 'João Dourado', 'BA');
            INSERT INTO `cidades` VALUES ('2592', '10', 'João Lisboa', 'MA');
            INSERT INTO `cidades` VALUES ('2593', '13', 'João Monlevade', 'MG');
            INSERT INTO `cidades` VALUES ('2594', '8', 'João Neiva', 'ES');
            INSERT INTO `cidades` VALUES ('2595', '15', 'João Pessoa', 'PB');
            INSERT INTO `cidades` VALUES ('2596', '13', 'João Pinheiro', 'MG');
            INSERT INTO `cidades` VALUES ('2597', '25', 'João Ramalho', 'SP');
            INSERT INTO `cidades` VALUES ('2598', '13', 'Joaquim Felício', 'MG');
            INSERT INTO `cidades` VALUES ('2599', '2', 'Joaquim Gomes', 'AL');
            INSERT INTO `cidades` VALUES ('2600', '17', 'Joaquim Nabuco', 'PE');
            INSERT INTO `cidades` VALUES ('2601', '18', 'Joaquim Pires', 'PI');
            INSERT INTO `cidades` VALUES ('2602', '16', 'Joaquim Távora', 'PR');
            INSERT INTO `cidades` VALUES ('2603', '15', 'Joca Claudino', 'PB');
            INSERT INTO `cidades` VALUES ('2604', '18', 'Joca Marques', 'PI');
            INSERT INTO `cidades` VALUES ('2605', '21', 'Jóia', 'RS');
            INSERT INTO `cidades` VALUES ('2606', '24', 'Joinville', 'SC');
            INSERT INTO `cidades` VALUES ('2607', '13', 'Jordânia', 'MG');
            INSERT INTO `cidades` VALUES ('2608', '1', 'Jordão', 'AC');
            INSERT INTO `cidades` VALUES ('2609', '24', 'José Boiteux', 'SC');
            INSERT INTO `cidades` VALUES ('2610', '25', 'José Bonifácio', 'SP');
            INSERT INTO `cidades` VALUES ('2611', '20', 'José da Penha', 'RN');
            INSERT INTO `cidades` VALUES ('2612', '18', 'José de Freitas', 'PI');
            INSERT INTO `cidades` VALUES ('2613', '13', 'José Gonçalves de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2614', '13', 'José Raydan', 'MG');
            INSERT INTO `cidades` VALUES ('2615', '10', 'Joselândia', 'MA');
            INSERT INTO `cidades` VALUES ('2616', '13', 'Josenópolis', 'MG');
            INSERT INTO `cidades` VALUES ('2617', '9', 'Joviânia', 'GO');
            INSERT INTO `cidades` VALUES ('2618', '11', 'Juara', 'MT');
            INSERT INTO `cidades` VALUES ('2619', '15', 'Juarez Távora', 'PB');
            INSERT INTO `cidades` VALUES ('2620', '27', 'Juarina', 'TO');
            INSERT INTO `cidades` VALUES ('2621', '13', 'Juatuba', 'MG');
            INSERT INTO `cidades` VALUES ('2622', '15', 'Juazeirinho', 'PB');
            INSERT INTO `cidades` VALUES ('2623', '5', 'Juazeiro', 'BA');
            INSERT INTO `cidades` VALUES ('2624', '6', 'Juazeiro do Norte', 'CE');
            INSERT INTO `cidades` VALUES ('2625', '18', 'Juazeiro do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('2626', '6', 'Jucás', 'CE');
            INSERT INTO `cidades` VALUES ('2627', '17', 'Jucati', 'PE');
            INSERT INTO `cidades` VALUES ('2628', '5', 'Jucuruçu', 'BA');
            INSERT INTO `cidades` VALUES ('2629', '20', 'Jucurutu', 'RN');
            INSERT INTO `cidades` VALUES ('2630', '11', 'Juína', 'MT');
            INSERT INTO `cidades` VALUES ('2631', '13', 'Juiz de Fora', 'MG');
            INSERT INTO `cidades` VALUES ('2632', '18', 'Júlio Borges', 'PI');
            INSERT INTO `cidades` VALUES ('2633', '21', 'Júlio de Castilhos', 'RS');
            INSERT INTO `cidades` VALUES ('2634', '25', 'Júlio Mesquita', 'SP');
            INSERT INTO `cidades` VALUES ('2635', '25', 'Jumirim', 'SP');
            INSERT INTO `cidades` VALUES ('2636', '10', 'Junco do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('2637', '15', 'Junco do Seridó', 'PB');
            INSERT INTO `cidades` VALUES ('2638', '2', 'Jundiá', 'AL');
            INSERT INTO `cidades` VALUES ('2639', '20', 'Jundiá', 'RN');
            INSERT INTO `cidades` VALUES ('2640', '25', 'Jundiaí', 'SP');
            INSERT INTO `cidades` VALUES ('2641', '16', 'Jundiaí do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('2642', '2', 'Junqueiro', 'AL');
            INSERT INTO `cidades` VALUES ('2643', '25', 'Junqueirópolis', 'SP');
            INSERT INTO `cidades` VALUES ('2644', '17', 'Jupi', 'PE');
            INSERT INTO `cidades` VALUES ('2645', '24', 'Jupiá', 'SC');
            INSERT INTO `cidades` VALUES ('2646', '25', 'Juquiá', 'SP');
            INSERT INTO `cidades` VALUES ('2647', '25', 'Juquitiba', 'SP');
            INSERT INTO `cidades` VALUES ('2648', '13', 'Juramento', 'MG');
            INSERT INTO `cidades` VALUES ('2649', '16', 'Juranda', 'PR');
            INSERT INTO `cidades` VALUES ('2650', '17', 'Jurema', 'PE');
            INSERT INTO `cidades` VALUES ('2651', '18', 'Jurema', 'PI');
            INSERT INTO `cidades` VALUES ('2652', '15', 'Juripiranga', 'PB');
            INSERT INTO `cidades` VALUES ('2653', '15', 'Juru', 'PB');
            INSERT INTO `cidades` VALUES ('2654', '4', 'Juruá', 'AM');
            INSERT INTO `cidades` VALUES ('2655', '13', 'Juruaia', 'MG');
            INSERT INTO `cidades` VALUES ('2656', '11', 'Juruena', 'MT');
            INSERT INTO `cidades` VALUES ('2657', '14', 'Juruti', 'PA');
            INSERT INTO `cidades` VALUES ('2658', '11', 'Juscimeira', 'MT');
            INSERT INTO `cidades` VALUES ('2659', '5', 'Jussara', 'BA');
            INSERT INTO `cidades` VALUES ('2660', '9', 'Jussara', 'GO');
            INSERT INTO `cidades` VALUES ('2661', '16', 'Jussara', 'PR');
            INSERT INTO `cidades` VALUES ('2662', '5', 'Jussari', 'BA');
            INSERT INTO `cidades` VALUES ('2663', '5', 'Jussiape', 'BA');
            INSERT INTO `cidades` VALUES ('2664', '4', 'Jutaí', 'AM');
            INSERT INTO `cidades` VALUES ('2665', '12', 'Juti', 'MS');
            INSERT INTO `cidades` VALUES ('2666', '13', 'Juvenília', 'MG');
            INSERT INTO `cidades` VALUES ('2667', '16', 'Kaloré', 'PR');
            INSERT INTO `cidades` VALUES ('2668', '4', 'Lábrea', 'AM');
            INSERT INTO `cidades` VALUES ('2669', '24', 'Lacerdópolis', 'SC');
            INSERT INTO `cidades` VALUES ('2670', '13', 'Ladainha', 'MG');
            INSERT INTO `cidades` VALUES ('2671', '12', 'Ladário', 'MS');
            INSERT INTO `cidades` VALUES ('2672', '5', 'Lafaiete Coutinho', 'BA');
            INSERT INTO `cidades` VALUES ('2673', '13', 'Lagamar', 'MG');
            INSERT INTO `cidades` VALUES ('2674', '26', 'Lagarto', 'SE');
            INSERT INTO `cidades` VALUES ('2675', '24', 'Lages', 'SC');
            INSERT INTO `cidades` VALUES ('2676', '10', 'Lago da Pedra', 'MA');
            INSERT INTO `cidades` VALUES ('2677', '10', 'Lago do Junco', 'MA');
            INSERT INTO `cidades` VALUES ('2678', '10', 'Lago dos Rodrigues', 'MA');
            INSERT INTO `cidades` VALUES ('2679', '10', 'Lago Verde', 'MA');
            INSERT INTO `cidades` VALUES ('2680', '15', 'Lagoa', 'PB');
            INSERT INTO `cidades` VALUES ('2681', '18', 'Lagoa Alegre', 'PI');
            INSERT INTO `cidades` VALUES ('2682', '21', 'Lagoa Bonita do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('2683', '2', 'Lagoa da Canoa', 'AL');
            INSERT INTO `cidades` VALUES ('2684', '27', 'Lagoa da Confusão', 'TO');
            INSERT INTO `cidades` VALUES ('2685', '13', 'Lagoa da Prata', 'MG');
            INSERT INTO `cidades` VALUES ('2686', '20', 'Lagoa d\'Anta', 'RN');
            INSERT INTO `cidades` VALUES ('2687', '15', 'Lagoa de Dentro', 'PB');
            INSERT INTO `cidades` VALUES ('2688', '17', 'Lagoa de Itaenga', 'PE');
            INSERT INTO `cidades` VALUES ('2689', '20', 'Lagoa de Pedras', 'RN');
            INSERT INTO `cidades` VALUES ('2690', '18', 'Lagoa de São Francisco', 'PI');
            INSERT INTO `cidades` VALUES ('2691', '20', 'Lagoa de Velhos', 'RN');
            INSERT INTO `cidades` VALUES ('2692', '18', 'Lagoa do Barro do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('2693', '17', 'Lagoa do Carro', 'PE');
            INSERT INTO `cidades` VALUES ('2694', '10', 'Lagoa do Mato', 'MA');
            INSERT INTO `cidades` VALUES ('2695', '17', 'Lagoa do Ouro', 'PE');
            INSERT INTO `cidades` VALUES ('2696', '18', 'Lagoa do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('2697', '18', 'Lagoa do Sítio', 'PI');
            INSERT INTO `cidades` VALUES ('2698', '27', 'Lagoa do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('2699', '17', 'Lagoa dos Gatos', 'PE');
            INSERT INTO `cidades` VALUES ('2700', '13', 'Lagoa dos Patos', 'MG');
            INSERT INTO `cidades` VALUES ('2701', '21', 'Lagoa dos Três Cantos', 'RS');
            INSERT INTO `cidades` VALUES ('2702', '13', 'Lagoa Dourada', 'MG');
            INSERT INTO `cidades` VALUES ('2703', '13', 'Lagoa Formosa', 'MG');
            INSERT INTO `cidades` VALUES ('2704', '13', 'Lagoa Grande', 'MG');
            INSERT INTO `cidades` VALUES ('2705', '17', 'Lagoa Grande', 'PE');
            INSERT INTO `cidades` VALUES ('2706', '10', 'Lagoa Grande do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('2707', '20', 'Lagoa Nova', 'RN');
            INSERT INTO `cidades` VALUES ('2708', '5', 'Lagoa Real', 'BA');
            INSERT INTO `cidades` VALUES ('2709', '20', 'Lagoa Salgada', 'RN');
            INSERT INTO `cidades` VALUES ('2710', '9', 'Lagoa Santa', 'GO');
            INSERT INTO `cidades` VALUES ('2711', '13', 'Lagoa Santa', 'MG');
            INSERT INTO `cidades` VALUES ('2712', '15', 'Lagoa Seca', 'PB');
            INSERT INTO `cidades` VALUES ('2713', '21', 'Lagoa Vermelha', 'RS');
            INSERT INTO `cidades` VALUES ('2714', '21', 'Lagoão', 'RS');
            INSERT INTO `cidades` VALUES ('2715', '25', 'Lagoinha', 'SP');
            INSERT INTO `cidades` VALUES ('2716', '18', 'Lagoinha do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('2717', '24', 'Laguna', 'SC');
            INSERT INTO `cidades` VALUES ('2718', '12', 'Laguna Carapã', 'MS');
            INSERT INTO `cidades` VALUES ('2719', '5', 'Laje', 'BA');
            INSERT INTO `cidades` VALUES ('2720', '19', 'Laje do Muriaé', 'RJ');
            INSERT INTO `cidades` VALUES ('2721', '21', 'Lajeado', 'RS');
            INSERT INTO `cidades` VALUES ('2722', '27', 'Lajeado', 'TO');
            INSERT INTO `cidades` VALUES ('2723', '21', 'Lajeado do Bugre', 'RS');
            INSERT INTO `cidades` VALUES ('2724', '24', 'Lajeado Grande', 'SC');
            INSERT INTO `cidades` VALUES ('2725', '10', 'Lajeado Novo', 'MA');
            INSERT INTO `cidades` VALUES ('2726', '5', 'Lajedão', 'BA');
            INSERT INTO `cidades` VALUES ('2727', '5', 'Lajedinho', 'BA');
            INSERT INTO `cidades` VALUES ('2728', '17', 'Lajedo', 'PE');
            INSERT INTO `cidades` VALUES ('2729', '5', 'Lajedo do Tabocal', 'BA');
            INSERT INTO `cidades` VALUES ('2730', '20', 'Lajes', 'RN');
            INSERT INTO `cidades` VALUES ('2731', '20', 'Lajes Pintadas', 'RN');
            INSERT INTO `cidades` VALUES ('2732', '13', 'Lajinha', 'MG');
            INSERT INTO `cidades` VALUES ('2733', '5', 'Lamarão', 'BA');
            INSERT INTO `cidades` VALUES ('2734', '13', 'Lambari', 'MG');
            INSERT INTO `cidades` VALUES ('2735', '11', 'Lambari D\'Oeste', 'MT');
            INSERT INTO `cidades` VALUES ('2736', '13', 'Lamim', 'MG');
            INSERT INTO `cidades` VALUES ('2737', '18', 'Landri Sales', 'PI');
            INSERT INTO `cidades` VALUES ('2738', '16', 'Lapa', 'PR');
            INSERT INTO `cidades` VALUES ('2739', '5', 'Lapão', 'BA');
            INSERT INTO `cidades` VALUES ('2740', '8', 'Laranja da Terra', 'ES');
            INSERT INTO `cidades` VALUES ('2741', '13', 'Laranjal', 'MG');
            INSERT INTO `cidades` VALUES ('2742', '16', 'Laranjal', 'PR');
            INSERT INTO `cidades` VALUES ('2743', '3', 'Laranjal do Jari', 'AP');
            INSERT INTO `cidades` VALUES ('2744', '25', 'Laranjal Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('2745', '26', 'Laranjeiras', 'SE');
            INSERT INTO `cidades` VALUES ('2746', '16', 'Laranjeiras do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('2747', '13', 'Lassance', 'MG');
            INSERT INTO `cidades` VALUES ('2748', '15', 'Lastro', 'PB');
            INSERT INTO `cidades` VALUES ('2749', '24', 'Laurentino', 'SC');
            INSERT INTO `cidades` VALUES ('2750', '5', 'Lauro de Freitas', 'BA');
            INSERT INTO `cidades` VALUES ('2751', '24', 'Lauro Muller', 'SC');
            INSERT INTO `cidades` VALUES ('2752', '27', 'Lavandeira', 'TO');
            INSERT INTO `cidades` VALUES ('2753', '25', 'Lavínia', 'SP');
            INSERT INTO `cidades` VALUES ('2754', '13', 'Lavras', 'MG');
            INSERT INTO `cidades` VALUES ('2755', '6', 'Lavras da Mangabeira', 'CE');
            INSERT INTO `cidades` VALUES ('2756', '21', 'Lavras do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('2757', '25', 'Lavrinhas', 'SP');
            INSERT INTO `cidades` VALUES ('2758', '13', 'Leandro Ferreira', 'MG');
            INSERT INTO `cidades` VALUES ('2759', '24', 'Lebon Régis', 'SC');
            INSERT INTO `cidades` VALUES ('2760', '25', 'Leme', 'SP');
            INSERT INTO `cidades` VALUES ('2761', '13', 'Leme do Prado', 'MG');
            INSERT INTO `cidades` VALUES ('2762', '5', 'Lençóis', 'BA');
            INSERT INTO `cidades` VALUES ('2763', '25', 'Lençóis Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('2764', '24', 'Leoberto Leal', 'SC');
            INSERT INTO `cidades` VALUES ('2765', '13', 'Leopoldina', 'MG');
            INSERT INTO `cidades` VALUES ('2766', '9', 'Leopoldo de Bulhões', 'GO');
            INSERT INTO `cidades` VALUES ('2767', '16', 'Leópolis', 'PR');
            INSERT INTO `cidades` VALUES ('2768', '21', 'Liberato Salzano', 'RS');
            INSERT INTO `cidades` VALUES ('2769', '13', 'Liberdade', 'MG');
            INSERT INTO `cidades` VALUES ('2770', '5', 'Licínio de Almeida', 'BA');
            INSERT INTO `cidades` VALUES ('2771', '16', 'Lidianópolis', 'PR');
            INSERT INTO `cidades` VALUES ('2772', '10', 'Lima Campos', 'MA');
            INSERT INTO `cidades` VALUES ('2773', '13', 'Lima Duarte', 'MG');
            INSERT INTO `cidades` VALUES ('2774', '25', 'Limeira', 'SP');
            INSERT INTO `cidades` VALUES ('2775', '13', 'Limeira do Oeste', 'MG');
            INSERT INTO `cidades` VALUES ('2776', '17', 'Limoeiro', 'PE');
            INSERT INTO `cidades` VALUES ('2777', '2', 'Limoeiro de Anadia', 'AL');
            INSERT INTO `cidades` VALUES ('2778', '14', 'Limoeiro do Ajuru', 'PA');
            INSERT INTO `cidades` VALUES ('2779', '6', 'Limoeiro do Norte', 'CE');
            INSERT INTO `cidades` VALUES ('2780', '16', 'Lindoeste', 'PR');
            INSERT INTO `cidades` VALUES ('2781', '25', 'Lindóia', 'SP');
            INSERT INTO `cidades` VALUES ('2782', '24', 'Lindóia do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('2783', '21', 'Lindolfo Collor', 'RS');
            INSERT INTO `cidades` VALUES ('2784', '21', 'Linha Nova', 'RS');
            INSERT INTO `cidades` VALUES ('2785', '8', 'Linhares', 'ES');
            INSERT INTO `cidades` VALUES ('2786', '25', 'Lins', 'SP');
            INSERT INTO `cidades` VALUES ('2787', '15', 'Livramento', 'PB');
            INSERT INTO `cidades` VALUES ('2788', '5', 'Livramento de Nossa Senhora', 'BA');
            INSERT INTO `cidades` VALUES ('2789', '27', 'Lizarda', 'TO');
            INSERT INTO `cidades` VALUES ('2790', '16', 'Loanda', 'PR');
            INSERT INTO `cidades` VALUES ('2791', '16', 'Lobato', 'PR');
            INSERT INTO `cidades` VALUES ('2792', '15', 'Logradouro', 'PB');
            INSERT INTO `cidades` VALUES ('2793', '16', 'Londrina', 'PR');
            INSERT INTO `cidades` VALUES ('2794', '13', 'Lontra', 'MG');
            INSERT INTO `cidades` VALUES ('2795', '24', 'Lontras', 'SC');
            INSERT INTO `cidades` VALUES ('2796', '25', 'Lorena', 'SP');
            INSERT INTO `cidades` VALUES ('2797', '10', 'Loreto', 'MA');
            INSERT INTO `cidades` VALUES ('2798', '25', 'Lourdes', 'SP');
            INSERT INTO `cidades` VALUES ('2799', '25', 'Louveira', 'SP');
            INSERT INTO `cidades` VALUES ('2800', '11', 'Lucas do Rio Verde', 'MT');
            INSERT INTO `cidades` VALUES ('2801', '25', 'Lucélia', 'SP');
            INSERT INTO `cidades` VALUES ('2802', '15', 'Lucena', 'PB');
            INSERT INTO `cidades` VALUES ('2803', '25', 'Lucianópolis', 'SP');
            INSERT INTO `cidades` VALUES ('2804', '11', 'Luciara', 'MT');
            INSERT INTO `cidades` VALUES ('2805', '20', 'Lucrécia', 'RN');
            INSERT INTO `cidades` VALUES ('2806', '25', 'Luís Antônio', 'SP');
            INSERT INTO `cidades` VALUES ('2807', '18', 'Luís Correia', 'PI');
            INSERT INTO `cidades` VALUES ('2808', '10', 'Luís Domingues', 'MA');
            INSERT INTO `cidades` VALUES ('2809', '5', 'Luís Eduardo Magalhães', 'BA');
            INSERT INTO `cidades` VALUES ('2810', '20', 'Luís Gomes', 'RN');
            INSERT INTO `cidades` VALUES ('2811', '13', 'Luisburgo', 'MG');
            INSERT INTO `cidades` VALUES ('2812', '13', 'Luislândia', 'MG');
            INSERT INTO `cidades` VALUES ('2813', '24', 'Luiz Alves', 'SC');
            INSERT INTO `cidades` VALUES ('2814', '16', 'Luiziana', 'PR');
            INSERT INTO `cidades` VALUES ('2815', '25', 'Luiziânia', 'SP');
            INSERT INTO `cidades` VALUES ('2816', '13', 'Luminárias', 'MG');
            INSERT INTO `cidades` VALUES ('2817', '16', 'Lunardelli', 'PR');
            INSERT INTO `cidades` VALUES ('2818', '25', 'Lupércio', 'SP');
            INSERT INTO `cidades` VALUES ('2819', '16', 'Lupionópolis', 'PR');
            INSERT INTO `cidades` VALUES ('2820', '25', 'Lutécia', 'SP');
            INSERT INTO `cidades` VALUES ('2821', '13', 'Luz', 'MG');
            INSERT INTO `cidades` VALUES ('2822', '24', 'Luzerna', 'SC');
            INSERT INTO `cidades` VALUES ('2823', '9', 'Luziânia', 'GO');
            INSERT INTO `cidades` VALUES ('2824', '18', 'Luzilândia', 'PI');
            INSERT INTO `cidades` VALUES ('2825', '27', 'Luzinópolis', 'TO');
            INSERT INTO `cidades` VALUES ('2826', '19', 'Macaé', 'RJ');
            INSERT INTO `cidades` VALUES ('2827', '20', 'Macaíba', 'RN');
            INSERT INTO `cidades` VALUES ('2828', '5', 'Macajuba', 'BA');
            INSERT INTO `cidades` VALUES ('2829', '21', 'Maçambará', 'RS');
            INSERT INTO `cidades` VALUES ('2830', '26', 'Macambira', 'SE');
            INSERT INTO `cidades` VALUES ('2831', '3', 'Macapá', 'AP');
            INSERT INTO `cidades` VALUES ('2832', '17', 'Macaparana', 'PE');
            INSERT INTO `cidades` VALUES ('2833', '5', 'Macarani', 'BA');
            INSERT INTO `cidades` VALUES ('2834', '25', 'Macatuba', 'SP');
            INSERT INTO `cidades` VALUES ('2835', '20', 'Macau', 'RN');
            INSERT INTO `cidades` VALUES ('2836', '25', 'Macaubal', 'SP');
            INSERT INTO `cidades` VALUES ('2837', '5', 'Macaúbas', 'BA');
            INSERT INTO `cidades` VALUES ('2838', '25', 'Macedônia', 'SP');
            INSERT INTO `cidades` VALUES ('2839', '2', 'Maceió', 'AL');
            INSERT INTO `cidades` VALUES ('2840', '13', 'Machacalis', 'MG');
            INSERT INTO `cidades` VALUES ('2841', '21', 'Machadinho', 'RS');
            INSERT INTO `cidades` VALUES ('2842', '22', 'Machadinho D\'Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('2843', '13', 'Machado', 'MG');
            INSERT INTO `cidades` VALUES ('2844', '17', 'Machados', 'PE');
            INSERT INTO `cidades` VALUES ('2845', '24', 'Macieira', 'SC');
            INSERT INTO `cidades` VALUES ('2846', '19', 'Macuco', 'RJ');
            INSERT INTO `cidades` VALUES ('2847', '5', 'Macururé', 'BA');
            INSERT INTO `cidades` VALUES ('2848', '6', 'Madalena', 'CE');
            INSERT INTO `cidades` VALUES ('2849', '18', 'Madeiro', 'PI');
            INSERT INTO `cidades` VALUES ('2850', '5', 'Madre de Deus', 'BA');
            INSERT INTO `cidades` VALUES ('2851', '13', 'Madre de Deus de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2852', '15', 'Mãe d\'Água', 'PB');
            INSERT INTO `cidades` VALUES ('2853', '14', 'Mãe do Rio', 'PA');
            INSERT INTO `cidades` VALUES ('2854', '5', 'Maetinga', 'BA');
            INSERT INTO `cidades` VALUES ('2855', '24', 'Mafra', 'SC');
            INSERT INTO `cidades` VALUES ('2856', '14', 'Magalhães Barata', 'PA');
            INSERT INTO `cidades` VALUES ('2857', '10', 'Magalhães de Almeida', 'MA');
            INSERT INTO `cidades` VALUES ('2858', '25', 'Magda', 'SP');
            INSERT INTO `cidades` VALUES ('2859', '19', 'Magé', 'RJ');
            INSERT INTO `cidades` VALUES ('2860', '5', 'Maiquinique', 'BA');
            INSERT INTO `cidades` VALUES ('2861', '5', 'Mairi', 'BA');
            INSERT INTO `cidades` VALUES ('2862', '25', 'Mairinque', 'SP');
            INSERT INTO `cidades` VALUES ('2863', '25', 'Mairiporã', 'SP');
            INSERT INTO `cidades` VALUES ('2864', '9', 'Mairipotaba', 'GO');
            INSERT INTO `cidades` VALUES ('2865', '24', 'Major Gercino', 'SC');
            INSERT INTO `cidades` VALUES ('2866', '2', 'Major Isidoro', 'AL');
            INSERT INTO `cidades` VALUES ('2867', '20', 'Major Sales', 'RN');
            INSERT INTO `cidades` VALUES ('2868', '24', 'Major Vieira', 'SC');
            INSERT INTO `cidades` VALUES ('2869', '13', 'Malacacheta', 'MG');
            INSERT INTO `cidades` VALUES ('2870', '5', 'Malhada', 'BA');
            INSERT INTO `cidades` VALUES ('2871', '5', 'Malhada de Pedras', 'BA');
            INSERT INTO `cidades` VALUES ('2872', '26', 'Malhada dos Bois', 'SE');
            INSERT INTO `cidades` VALUES ('2873', '26', 'Malhador', 'SE');
            INSERT INTO `cidades` VALUES ('2874', '16', 'Mallet', 'PR');
            INSERT INTO `cidades` VALUES ('2875', '15', 'Malta', 'PB');
            INSERT INTO `cidades` VALUES ('2876', '15', 'Mamanguape', 'PB');
            INSERT INTO `cidades` VALUES ('2877', '9', 'Mambaí', 'GO');
            INSERT INTO `cidades` VALUES ('2878', '16', 'Mamborê', 'PR');
            INSERT INTO `cidades` VALUES ('2879', '13', 'Mamonas', 'MG');
            INSERT INTO `cidades` VALUES ('2880', '21', 'Mampituba', 'RS');
            INSERT INTO `cidades` VALUES ('2881', '4', 'Manacapuru', 'AM');
            INSERT INTO `cidades` VALUES ('2882', '15', 'Manaíra', 'PB');
            INSERT INTO `cidades` VALUES ('2883', '4', 'Manaquiri', 'AM');
            INSERT INTO `cidades` VALUES ('2884', '17', 'Manari', 'PE');
            INSERT INTO `cidades` VALUES ('2885', '4', 'Manaus', 'AM');
            INSERT INTO `cidades` VALUES ('2886', '1', 'Mâncio Lima', 'AC');
            INSERT INTO `cidades` VALUES ('2887', '16', 'Mandaguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('2888', '16', 'Mandaguari', 'PR');
            INSERT INTO `cidades` VALUES ('2889', '16', 'Mandirituba', 'PR');
            INSERT INTO `cidades` VALUES ('2890', '25', 'Manduri', 'SP');
            INSERT INTO `cidades` VALUES ('2891', '16', 'Manfrinópolis', 'PR');
            INSERT INTO `cidades` VALUES ('2892', '13', 'Manga', 'MG');
            INSERT INTO `cidades` VALUES ('2893', '19', 'Mangaratiba', 'RJ');
            INSERT INTO `cidades` VALUES ('2894', '16', 'Mangueirinha', 'PR');
            INSERT INTO `cidades` VALUES ('2895', '13', 'Manhuaçu', 'MG');
            INSERT INTO `cidades` VALUES ('2896', '13', 'Manhumirim', 'MG');
            INSERT INTO `cidades` VALUES ('2897', '4', 'Manicoré', 'AM');
            INSERT INTO `cidades` VALUES ('2898', '18', 'Manoel Emídio', 'PI');
            INSERT INTO `cidades` VALUES ('2899', '16', 'Manoel Ribas', 'PR');
            INSERT INTO `cidades` VALUES ('2900', '1', 'Manoel Urbano', 'AC');
            INSERT INTO `cidades` VALUES ('2901', '21', 'Manoel Viana', 'RS');
            INSERT INTO `cidades` VALUES ('2902', '5', 'Manoel Vitorino', 'BA');
            INSERT INTO `cidades` VALUES ('2903', '5', 'Mansidão', 'BA');
            INSERT INTO `cidades` VALUES ('2904', '13', 'Mantena', 'MG');
            INSERT INTO `cidades` VALUES ('2905', '8', 'Mantenópolis', 'ES');
            INSERT INTO `cidades` VALUES ('2906', '21', 'Maquiné', 'RS');
            INSERT INTO `cidades` VALUES ('2907', '13', 'Mar de Espanha', 'MG');
            INSERT INTO `cidades` VALUES ('2908', '2', 'Mar Vermelho', 'AL');
            INSERT INTO `cidades` VALUES ('2909', '9', 'Mara Rosa', 'GO');
            INSERT INTO `cidades` VALUES ('2910', '4', 'Maraã', 'AM');
            INSERT INTO `cidades` VALUES ('2911', '14', 'Marabá', 'PA');
            INSERT INTO `cidades` VALUES ('2912', '25', 'Marabá Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('2913', '10', 'Maracaçumé', 'MA');
            INSERT INTO `cidades` VALUES ('2914', '25', 'Maracaí', 'SP');
            INSERT INTO `cidades` VALUES ('2915', '24', 'Maracajá', 'SC');
            INSERT INTO `cidades` VALUES ('2916', '12', 'Maracaju', 'MS');
            INSERT INTO `cidades` VALUES ('2917', '14', 'Maracanã', 'PA');
            INSERT INTO `cidades` VALUES ('2918', '6', 'Maracanaú', 'CE');
            INSERT INTO `cidades` VALUES ('2919', '5', 'Maracás', 'BA');
            INSERT INTO `cidades` VALUES ('2920', '2', 'Maragogi', 'AL');
            INSERT INTO `cidades` VALUES ('2921', '5', 'Maragogipe', 'BA');
            INSERT INTO `cidades` VALUES ('2922', '17', 'Maraial', 'PE');
            INSERT INTO `cidades` VALUES ('2923', '10', 'Marajá do Sena', 'MA');
            INSERT INTO `cidades` VALUES ('2924', '6', 'Maranguape', 'CE');
            INSERT INTO `cidades` VALUES ('2925', '10', 'Maranhãozinho', 'MA');
            INSERT INTO `cidades` VALUES ('2926', '14', 'Marapanim', 'PA');
            INSERT INTO `cidades` VALUES ('2927', '25', 'Marapoama', 'SP');
            INSERT INTO `cidades` VALUES ('2928', '21', 'Maratá', 'RS');
            INSERT INTO `cidades` VALUES ('2929', '8', 'Marataízes', 'ES');
            INSERT INTO `cidades` VALUES ('2930', '21', 'Marau', 'RS');
            INSERT INTO `cidades` VALUES ('2931', '5', 'Maraú', 'BA');
            INSERT INTO `cidades` VALUES ('2932', '2', 'Maravilha', 'AL');
            INSERT INTO `cidades` VALUES ('2933', '24', 'Maravilha', 'SC');
            INSERT INTO `cidades` VALUES ('2934', '13', 'Maravilhas', 'MG');
            INSERT INTO `cidades` VALUES ('2935', '15', 'Marcação', 'PB');
            INSERT INTO `cidades` VALUES ('2936', '11', 'Marcelândia', 'MT');
            INSERT INTO `cidades` VALUES ('2937', '21', 'Marcelino Ramos', 'RS');
            INSERT INTO `cidades` VALUES ('2938', '20', 'Marcelino Vieira', 'RN');
            INSERT INTO `cidades` VALUES ('2939', '5', 'Marcionílio Souza', 'BA');
            INSERT INTO `cidades` VALUES ('2940', '6', 'Marco', 'CE');
            INSERT INTO `cidades` VALUES ('2941', '18', 'Marcolândia', 'PI');
            INSERT INTO `cidades` VALUES ('2942', '18', 'Marcos Parente', 'PI');
            INSERT INTO `cidades` VALUES ('2943', '16', 'Marechal Cândido Rondon', 'PR');
            INSERT INTO `cidades` VALUES ('2944', '2', 'Marechal Deodoro', 'AL');
            INSERT INTO `cidades` VALUES ('2945', '8', 'Marechal Floriano', 'ES');
            INSERT INTO `cidades` VALUES ('2946', '1', 'Marechal Thaumaturgo', 'AC');
            INSERT INTO `cidades` VALUES ('2947', '24', 'Marema', 'SC');
            INSERT INTO `cidades` VALUES ('2948', '15', 'Mari', 'PB');
            INSERT INTO `cidades` VALUES ('2949', '13', 'Maria da Fé', 'MG');
            INSERT INTO `cidades` VALUES ('2950', '16', 'Maria Helena', 'PR');
            INSERT INTO `cidades` VALUES ('2951', '16', 'Marialva', 'PR');
            INSERT INTO `cidades` VALUES ('2952', '13', 'Mariana', 'MG');
            INSERT INTO `cidades` VALUES ('2953', '21', 'Mariana Pimentel', 'RS');
            INSERT INTO `cidades` VALUES ('2954', '21', 'Mariano Moro', 'RS');
            INSERT INTO `cidades` VALUES ('2955', '27', 'Marianópolis do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('2956', '25', 'Mariápolis', 'SP');
            INSERT INTO `cidades` VALUES ('2957', '2', 'Maribondo', 'AL');
            INSERT INTO `cidades` VALUES ('2958', '19', 'Maricá', 'RJ');
            INSERT INTO `cidades` VALUES ('2959', '13', 'Marilac', 'MG');
            INSERT INTO `cidades` VALUES ('2960', '8', 'Marilândia', 'ES');
            INSERT INTO `cidades` VALUES ('2961', '16', 'Marilândia do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('2962', '16', 'Marilena', 'PR');
            INSERT INTO `cidades` VALUES ('2963', '25', 'Marília', 'SP');
            INSERT INTO `cidades` VALUES ('2964', '16', 'Mariluz', 'PR');
            INSERT INTO `cidades` VALUES ('2965', '16', 'Maringá', 'PR');
            INSERT INTO `cidades` VALUES ('2966', '25', 'Marinópolis', 'SP');
            INSERT INTO `cidades` VALUES ('2967', '13', 'Mário Campos', 'MG');
            INSERT INTO `cidades` VALUES ('2968', '16', 'Mariópolis', 'PR');
            INSERT INTO `cidades` VALUES ('2969', '16', 'Maripá', 'PR');
            INSERT INTO `cidades` VALUES ('2970', '13', 'Maripá de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('2971', '14', 'Marituba', 'PA');
            INSERT INTO `cidades` VALUES ('2972', '15', 'Marizópolis', 'PB');
            INSERT INTO `cidades` VALUES ('2973', '13', 'Marliéria', 'MG');
            INSERT INTO `cidades` VALUES ('2974', '16', 'Marmeleiro', 'PR');
            INSERT INTO `cidades` VALUES ('2975', '13', 'Marmelópolis', 'MG');
            INSERT INTO `cidades` VALUES ('2976', '21', 'Marques de Souza', 'RS');
            INSERT INTO `cidades` VALUES ('2977', '16', 'Marquinho', 'PR');
            INSERT INTO `cidades` VALUES ('2978', '13', 'Martinho Campos', 'MG');
            INSERT INTO `cidades` VALUES ('2979', '6', 'Martinópole', 'CE');
            INSERT INTO `cidades` VALUES ('2980', '25', 'Martinópolis', 'SP');
            INSERT INTO `cidades` VALUES ('2981', '20', 'Martins', 'RN');
            INSERT INTO `cidades` VALUES ('2982', '13', 'Martins Soares', 'MG');
            INSERT INTO `cidades` VALUES ('2983', '26', 'Maruim', 'SE');
            INSERT INTO `cidades` VALUES ('2984', '16', 'Marumbi', 'PR');
            INSERT INTO `cidades` VALUES ('2985', '9', 'Marzagão', 'GO');
            INSERT INTO `cidades` VALUES ('2986', '5', 'Mascote', 'BA');
            INSERT INTO `cidades` VALUES ('2987', '6', 'Massapê', 'CE');
            INSERT INTO `cidades` VALUES ('2988', '18', 'Massapê do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('2989', '15', 'Massaranduba', 'PB');
            INSERT INTO `cidades` VALUES ('2990', '24', 'Massaranduba', 'SC');
            INSERT INTO `cidades` VALUES ('2991', '21', 'Mata', 'RS');
            INSERT INTO `cidades` VALUES ('2992', '5', 'Mata de São João', 'BA');
            INSERT INTO `cidades` VALUES ('2993', '2', 'Mata Grande', 'AL');
            INSERT INTO `cidades` VALUES ('2994', '10', 'Mata Roma', 'MA');
            INSERT INTO `cidades` VALUES ('2995', '13', 'Mata Verde', 'MG');
            INSERT INTO `cidades` VALUES ('2996', '25', 'Matão', 'SP');
            INSERT INTO `cidades` VALUES ('2997', '15', 'Mataraca', 'PB');
            INSERT INTO `cidades` VALUES ('2998', '27', 'Mateiros', 'TO');
            INSERT INTO `cidades` VALUES ('2999', '16', 'Matelândia', 'PR');
            INSERT INTO `cidades` VALUES ('3000', '13', 'Materlândia', 'MG');
            INSERT INTO `cidades` VALUES ('3001', '13', 'Mateus Leme', 'MG');
            INSERT INTO `cidades` VALUES ('3002', '13', 'Mathias Lobato', 'MG');
            INSERT INTO `cidades` VALUES ('3003', '13', 'Matias Barbosa', 'MG');
            INSERT INTO `cidades` VALUES ('3004', '13', 'Matias Cardoso', 'MG');
            INSERT INTO `cidades` VALUES ('3005', '18', 'Matias Olímpio', 'PI');
            INSERT INTO `cidades` VALUES ('3006', '5', 'Matina', 'BA');
            INSERT INTO `cidades` VALUES ('3007', '10', 'Matinha', 'MA');
            INSERT INTO `cidades` VALUES ('3008', '15', 'Matinhas', 'PB');
            INSERT INTO `cidades` VALUES ('3009', '16', 'Matinhos', 'PR');
            INSERT INTO `cidades` VALUES ('3010', '13', 'Matipó', 'MG');
            INSERT INTO `cidades` VALUES ('3011', '21', 'Mato Castelhano', 'RS');
            INSERT INTO `cidades` VALUES ('3012', '15', 'Mato Grosso', 'PB');
            INSERT INTO `cidades` VALUES ('3013', '21', 'Mato Leitão', 'RS');
            INSERT INTO `cidades` VALUES ('3014', '21', 'Mato Queimado', 'RS');
            INSERT INTO `cidades` VALUES ('3015', '16', 'Mato Rico', 'PR');
            INSERT INTO `cidades` VALUES ('3016', '13', 'Mato Verde', 'MG');
            INSERT INTO `cidades` VALUES ('3017', '10', 'Matões', 'MA');
            INSERT INTO `cidades` VALUES ('3018', '10', 'Matões do Norte', 'MA');
            INSERT INTO `cidades` VALUES ('3019', '24', 'Matos Costa', 'SC');
            INSERT INTO `cidades` VALUES ('3020', '13', 'Matozinhos', 'MG');
            INSERT INTO `cidades` VALUES ('3021', '9', 'Matrinchã', 'GO');
            INSERT INTO `cidades` VALUES ('3022', '2', 'Matriz de Camaragibe', 'AL');
            INSERT INTO `cidades` VALUES ('3023', '11', 'Matupá', 'MT');
            INSERT INTO `cidades` VALUES ('3024', '15', 'Maturéia', 'PB');
            INSERT INTO `cidades` VALUES ('3025', '13', 'Matutina', 'MG');
            INSERT INTO `cidades` VALUES ('3026', '25', 'Mauá', 'SP');
            INSERT INTO `cidades` VALUES ('3027', '16', 'Mauá da Serra', 'PR');
            INSERT INTO `cidades` VALUES ('3028', '4', 'Maués', 'AM');
            INSERT INTO `cidades` VALUES ('3029', '9', 'Maurilândia', 'GO');
            INSERT INTO `cidades` VALUES ('3030', '27', 'Maurilândia do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('3031', '6', 'Mauriti', 'CE');
            INSERT INTO `cidades` VALUES ('3032', '20', 'Maxaranguape', 'RN');
            INSERT INTO `cidades` VALUES ('3033', '21', 'Maximiliano de Almeida', 'RS');
            INSERT INTO `cidades` VALUES ('3034', '3', 'Mazagão', 'AP');
            INSERT INTO `cidades` VALUES ('3035', '13', 'Medeiros', 'MG');
            INSERT INTO `cidades` VALUES ('3036', '5', 'Medeiros Neto', 'BA');
            INSERT INTO `cidades` VALUES ('3037', '16', 'Medianeira', 'PR');
            INSERT INTO `cidades` VALUES ('3038', '14', 'Medicilândia', 'PA');
            INSERT INTO `cidades` VALUES ('3039', '13', 'Medina', 'MG');
            INSERT INTO `cidades` VALUES ('3040', '24', 'Meleiro', 'SC');
            INSERT INTO `cidades` VALUES ('3041', '14', 'Melgaço', 'PA');
            INSERT INTO `cidades` VALUES ('3042', '19', 'Mendes', 'RJ');
            INSERT INTO `cidades` VALUES ('3043', '13', 'Mendes Pimentel', 'MG');
            INSERT INTO `cidades` VALUES ('3044', '25', 'Mendonça', 'SP');
            INSERT INTO `cidades` VALUES ('3045', '16', 'Mercedes', 'PR');
            INSERT INTO `cidades` VALUES ('3046', '13', 'Mercês', 'MG');
            INSERT INTO `cidades` VALUES ('3047', '25', 'Meridiano', 'SP');
            INSERT INTO `cidades` VALUES ('3048', '6', 'Meruoca', 'CE');
            INSERT INTO `cidades` VALUES ('3049', '25', 'Mesópolis', 'SP');
            INSERT INTO `cidades` VALUES ('3050', '13', 'Mesquita', 'MG');
            INSERT INTO `cidades` VALUES ('3051', '19', 'Mesquita', 'RJ');
            INSERT INTO `cidades` VALUES ('3052', '2', 'Messias', 'AL');
            INSERT INTO `cidades` VALUES ('3053', '20', 'Messias Targino', 'RN');
            INSERT INTO `cidades` VALUES ('3054', '18', 'Miguel Alves', 'PI');
            INSERT INTO `cidades` VALUES ('3055', '5', 'Miguel Calmon', 'BA');
            INSERT INTO `cidades` VALUES ('3056', '18', 'Miguel Leão', 'PI');
            INSERT INTO `cidades` VALUES ('3057', '19', 'Miguel Pereira', 'RJ');
            INSERT INTO `cidades` VALUES ('3058', '25', 'Miguelópolis', 'SP');
            INSERT INTO `cidades` VALUES ('3059', '5', 'Milagres', 'BA');
            INSERT INTO `cidades` VALUES ('3060', '6', 'Milagres', 'CE');
            INSERT INTO `cidades` VALUES ('3061', '10', 'Milagres do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('3062', '6', 'Milhã', 'CE');
            INSERT INTO `cidades` VALUES ('3063', '18', 'Milton Brandão', 'PI');
            INSERT INTO `cidades` VALUES ('3064', '9', 'Mimoso de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3065', '8', 'Mimoso do Sul', 'ES');
            INSERT INTO `cidades` VALUES ('3066', '9', 'Minaçu', 'GO');
            INSERT INTO `cidades` VALUES ('3067', '2', 'Minador do Negrão', 'AL');
            INSERT INTO `cidades` VALUES ('3068', '21', 'Minas do Leão', 'RS');
            INSERT INTO `cidades` VALUES ('3069', '13', 'Minas Novas', 'MG');
            INSERT INTO `cidades` VALUES ('3070', '13', 'Minduri', 'MG');
            INSERT INTO `cidades` VALUES ('3071', '9', 'Mineiros', 'GO');
            INSERT INTO `cidades` VALUES ('3072', '25', 'Mineiros do Tietê', 'SP');
            INSERT INTO `cidades` VALUES ('3073', '22', 'Ministro Andreazza', 'RO');
            INSERT INTO `cidades` VALUES ('3074', '25', 'Mira Estrela', 'SP');
            INSERT INTO `cidades` VALUES ('3075', '13', 'Mirabela', 'MG');
            INSERT INTO `cidades` VALUES ('3076', '25', 'Miracatu', 'SP');
            INSERT INTO `cidades` VALUES ('3077', '19', 'Miracema', 'RJ');
            INSERT INTO `cidades` VALUES ('3078', '27', 'Miracema do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('3079', '10', 'Mirador', 'MA');
            INSERT INTO `cidades` VALUES ('3080', '16', 'Mirador', 'PR');
            INSERT INTO `cidades` VALUES ('3081', '13', 'Miradouro', 'MG');
            INSERT INTO `cidades` VALUES ('3082', '21', 'Miraguaí', 'RS');
            INSERT INTO `cidades` VALUES ('3083', '13', 'Miraí', 'MG');
            INSERT INTO `cidades` VALUES ('3084', '6', 'Miraíma', 'CE');
            INSERT INTO `cidades` VALUES ('3085', '12', 'Miranda', 'MS');
            INSERT INTO `cidades` VALUES ('3086', '10', 'Miranda do Norte', 'MA');
            INSERT INTO `cidades` VALUES ('3087', '17', 'Mirandiba', 'PE');
            INSERT INTO `cidades` VALUES ('3088', '25', 'Mirandópolis', 'SP');
            INSERT INTO `cidades` VALUES ('3089', '5', 'Mirangaba', 'BA');
            INSERT INTO `cidades` VALUES ('3090', '27', 'Miranorte', 'TO');
            INSERT INTO `cidades` VALUES ('3091', '5', 'Mirante', 'BA');
            INSERT INTO `cidades` VALUES ('3092', '22', 'Mirante da Serra', 'RO');
            INSERT INTO `cidades` VALUES ('3093', '25', 'Mirante do Paranapanema', 'SP');
            INSERT INTO `cidades` VALUES ('3094', '16', 'Miraselva', 'PR');
            INSERT INTO `cidades` VALUES ('3095', '25', 'Mirassol', 'SP');
            INSERT INTO `cidades` VALUES ('3096', '11', 'Mirassol d\'Oeste', 'MT');
            INSERT INTO `cidades` VALUES ('3097', '25', 'Mirassolândia', 'SP');
            INSERT INTO `cidades` VALUES ('3098', '13', 'Miravânia', 'MG');
            INSERT INTO `cidades` VALUES ('3099', '24', 'Mirim Doce', 'SC');
            INSERT INTO `cidades` VALUES ('3100', '10', 'Mirinzal', 'MA');
            INSERT INTO `cidades` VALUES ('3101', '16', 'Missal', 'PR');
            INSERT INTO `cidades` VALUES ('3102', '6', 'Missão Velha', 'CE');
            INSERT INTO `cidades` VALUES ('3103', '14', 'Mocajuba', 'PA');
            INSERT INTO `cidades` VALUES ('3104', '25', 'Mococa', 'SP');
            INSERT INTO `cidades` VALUES ('3105', '24', 'Modelo', 'SC');
            INSERT INTO `cidades` VALUES ('3106', '13', 'Moeda', 'MG');
            INSERT INTO `cidades` VALUES ('3107', '13', 'Moema', 'MG');
            INSERT INTO `cidades` VALUES ('3108', '15', 'Mogeiro', 'PB');
            INSERT INTO `cidades` VALUES ('3109', '25', 'Mogi das Cruzes', 'SP');
            INSERT INTO `cidades` VALUES ('3110', '25', 'Mogi Guaçu', 'SP');
            INSERT INTO `cidades` VALUES ('3111', '9', 'Moiporá', 'GO');
            INSERT INTO `cidades` VALUES ('3112', '26', 'Moita Bonita', 'SE');
            INSERT INTO `cidades` VALUES ('3113', '25', 'Moji Mirim', 'SP');
            INSERT INTO `cidades` VALUES ('3114', '14', 'Moju', 'PA');
            INSERT INTO `cidades` VALUES ('3115', '6', 'Mombaça', 'CE');
            INSERT INTO `cidades` VALUES ('3116', '25', 'Mombuca', 'SP');
            INSERT INTO `cidades` VALUES ('3117', '10', 'Monção', 'MA');
            INSERT INTO `cidades` VALUES ('3118', '25', 'Monções', 'SP');
            INSERT INTO `cidades` VALUES ('3119', '24', 'Mondaí', 'SC');
            INSERT INTO `cidades` VALUES ('3120', '25', 'Mongaguá', 'SP');
            INSERT INTO `cidades` VALUES ('3121', '13', 'Monjolos', 'MG');
            INSERT INTO `cidades` VALUES ('3122', '18', 'Monsenhor Gil', 'PI');
            INSERT INTO `cidades` VALUES ('3123', '18', 'Monsenhor Hipólito', 'PI');
            INSERT INTO `cidades` VALUES ('3124', '13', 'Monsenhor Paulo', 'MG');
            INSERT INTO `cidades` VALUES ('3125', '6', 'Monsenhor Tabosa', 'CE');
            INSERT INTO `cidades` VALUES ('3126', '15', 'Montadas', 'PB');
            INSERT INTO `cidades` VALUES ('3127', '13', 'Montalvânia', 'MG');
            INSERT INTO `cidades` VALUES ('3128', '8', 'Montanha', 'ES');
            INSERT INTO `cidades` VALUES ('3129', '20', 'Montanhas', 'RN');
            INSERT INTO `cidades` VALUES ('3130', '21', 'Montauri', 'RS');
            INSERT INTO `cidades` VALUES ('3131', '14', 'Monte Alegre', 'PA');
            INSERT INTO `cidades` VALUES ('3132', '20', 'Monte Alegre', 'RN');
            INSERT INTO `cidades` VALUES ('3133', '9', 'Monte Alegre de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3134', '13', 'Monte Alegre de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('3135', '26', 'Monte Alegre de Sergipe', 'SE');
            INSERT INTO `cidades` VALUES ('3136', '18', 'Monte Alegre do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3137', '25', 'Monte Alegre do Sul', 'SP');
            INSERT INTO `cidades` VALUES ('3138', '21', 'Monte Alegre dos Campos', 'RS');
            INSERT INTO `cidades` VALUES ('3139', '25', 'Monte Alto', 'SP');
            INSERT INTO `cidades` VALUES ('3140', '25', 'Monte Aprazível', 'SP');
            INSERT INTO `cidades` VALUES ('3141', '13', 'Monte Azul', 'MG');
            INSERT INTO `cidades` VALUES ('3142', '25', 'Monte Azul Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('3143', '13', 'Monte Belo', 'MG');
            INSERT INTO `cidades` VALUES ('3144', '21', 'Monte Belo do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('3145', '24', 'Monte Carlo', 'SC');
            INSERT INTO `cidades` VALUES ('3146', '13', 'Monte Carmelo', 'MG');
            INSERT INTO `cidades` VALUES ('3147', '24', 'Monte Castelo', 'SC');
            INSERT INTO `cidades` VALUES ('3148', '25', 'Monte Castelo', 'SP');
            INSERT INTO `cidades` VALUES ('3149', '20', 'Monte das Gameleiras', 'RN');
            INSERT INTO `cidades` VALUES ('3150', '27', 'Monte do Carmo', 'TO');
            INSERT INTO `cidades` VALUES ('3151', '13', 'Monte Formoso', 'MG');
            INSERT INTO `cidades` VALUES ('3152', '15', 'Monte Horebe', 'PB');
            INSERT INTO `cidades` VALUES ('3153', '25', 'Monte Mor', 'SP');
            INSERT INTO `cidades` VALUES ('3154', '22', 'Monte Negro', 'RO');
            INSERT INTO `cidades` VALUES ('3155', '5', 'Monte Santo', 'BA');
            INSERT INTO `cidades` VALUES ('3156', '13', 'Monte Santo de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('3157', '27', 'Monte Santo do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('3158', '13', 'Monte Sião', 'MG');
            INSERT INTO `cidades` VALUES ('3159', '15', 'Monteiro', 'PB');
            INSERT INTO `cidades` VALUES ('3160', '25', 'Monteiro Lobato', 'SP');
            INSERT INTO `cidades` VALUES ('3161', '2', 'Monteirópolis', 'AL');
            INSERT INTO `cidades` VALUES ('3162', '21', 'Montenegro', 'RS');
            INSERT INTO `cidades` VALUES ('3163', '10', 'Montes Altos', 'MA');
            INSERT INTO `cidades` VALUES ('3164', '13', 'Montes Claros', 'MG');
            INSERT INTO `cidades` VALUES ('3165', '9', 'Montes Claros de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3166', '13', 'Montezuma', 'MG');
            INSERT INTO `cidades` VALUES ('3167', '9', 'Montividiu', 'GO');
            INSERT INTO `cidades` VALUES ('3168', '9', 'Montividiu do Norte', 'GO');
            INSERT INTO `cidades` VALUES ('3169', '6', 'Morada Nova', 'CE');
            INSERT INTO `cidades` VALUES ('3170', '13', 'Morada Nova de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('3171', '6', 'Moraújo', 'CE');
            INSERT INTO `cidades` VALUES ('3172', '17', 'Moreilândia', 'PE');
            INSERT INTO `cidades` VALUES ('3173', '16', 'Moreira Sales', 'PR');
            INSERT INTO `cidades` VALUES ('3174', '17', 'Moreno', 'PE');
            INSERT INTO `cidades` VALUES ('3175', '21', 'Mormaço', 'RS');
            INSERT INTO `cidades` VALUES ('3176', '5', 'Morpará', 'BA');
            INSERT INTO `cidades` VALUES ('3177', '16', 'Morretes', 'PR');
            INSERT INTO `cidades` VALUES ('3178', '6', 'Morrinhos', 'CE');
            INSERT INTO `cidades` VALUES ('3179', '9', 'Morrinhos', 'GO');
            INSERT INTO `cidades` VALUES ('3180', '21', 'Morrinhos do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('3181', '25', 'Morro Agudo', 'SP');
            INSERT INTO `cidades` VALUES ('3182', '9', 'Morro Agudo de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3183', '18', 'Morro Cabeça no Tempo', 'PI');
            INSERT INTO `cidades` VALUES ('3184', '24', 'Morro da Fumaça', 'SC');
            INSERT INTO `cidades` VALUES ('3185', '13', 'Morro da Garça', 'MG');
            INSERT INTO `cidades` VALUES ('3186', '5', 'Morro do Chapéu', 'BA');
            INSERT INTO `cidades` VALUES ('3187', '18', 'Morro do Chapéu do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3188', '13', 'Morro do Pilar', 'MG');
            INSERT INTO `cidades` VALUES ('3189', '24', 'Morro Grande', 'SC');
            INSERT INTO `cidades` VALUES ('3190', '21', 'Morro Redondo', 'RS');
            INSERT INTO `cidades` VALUES ('3191', '21', 'Morro Reuter', 'RS');
            INSERT INTO `cidades` VALUES ('3192', '10', 'Morros', 'MA');
            INSERT INTO `cidades` VALUES ('3193', '5', 'Mortugaba', 'BA');
            INSERT INTO `cidades` VALUES ('3194', '25', 'Morungaba', 'SP');
            INSERT INTO `cidades` VALUES ('3195', '9', 'Mossâmedes', 'GO');
            INSERT INTO `cidades` VALUES ('3196', '20', 'Mossoró', 'RN');
            INSERT INTO `cidades` VALUES ('3197', '21', 'Mostardas', 'RS');
            INSERT INTO `cidades` VALUES ('3198', '25', 'Motuca', 'SP');
            INSERT INTO `cidades` VALUES ('3199', '9', 'Mozarlândia', 'GO');
            INSERT INTO `cidades` VALUES ('3200', '14', 'Muaná', 'PA');
            INSERT INTO `cidades` VALUES ('3201', '23', 'Mucajaí', 'RR');
            INSERT INTO `cidades` VALUES ('3202', '6', 'Mucambo', 'CE');
            INSERT INTO `cidades` VALUES ('3203', '5', 'Mucugê', 'BA');
            INSERT INTO `cidades` VALUES ('3204', '21', 'Muçum', 'RS');
            INSERT INTO `cidades` VALUES ('3205', '5', 'Mucuri', 'BA');
            INSERT INTO `cidades` VALUES ('3206', '8', 'Mucurici', 'ES');
            INSERT INTO `cidades` VALUES ('3207', '21', 'Muitos Capões', 'RS');
            INSERT INTO `cidades` VALUES ('3208', '21', 'Muliterno', 'RS');
            INSERT INTO `cidades` VALUES ('3209', '6', 'Mulungu', 'CE');
            INSERT INTO `cidades` VALUES ('3210', '15', 'Mulungu', 'PB');
            INSERT INTO `cidades` VALUES ('3211', '5', 'Mulungu do Morro', 'BA');
            INSERT INTO `cidades` VALUES ('3212', '5', 'Mundo Novo', 'BA');
            INSERT INTO `cidades` VALUES ('3213', '9', 'Mundo Novo', 'GO');
            INSERT INTO `cidades` VALUES ('3214', '12', 'Mundo Novo', 'MS');
            INSERT INTO `cidades` VALUES ('3215', '13', 'Munhoz', 'MG');
            INSERT INTO `cidades` VALUES ('3216', '16', 'Munhoz de Melo', 'PR');
            INSERT INTO `cidades` VALUES ('3217', '5', 'Muniz Ferreira', 'BA');
            INSERT INTO `cidades` VALUES ('3218', '8', 'Muniz Freire', 'ES');
            INSERT INTO `cidades` VALUES ('3219', '5', 'Muquém de São Francisco', 'BA');
            INSERT INTO `cidades` VALUES ('3220', '8', 'Muqui', 'ES');
            INSERT INTO `cidades` VALUES ('3221', '13', 'Muriaé', 'MG');
            INSERT INTO `cidades` VALUES ('3222', '26', 'Muribeca', 'SE');
            INSERT INTO `cidades` VALUES ('3223', '2', 'Murici', 'AL');
            INSERT INTO `cidades` VALUES ('3224', '18', 'Murici dos Portelas', 'PI');
            INSERT INTO `cidades` VALUES ('3225', '27', 'Muricilândia', 'TO');
            INSERT INTO `cidades` VALUES ('3226', '5', 'Muritiba', 'BA');
            INSERT INTO `cidades` VALUES ('3227', '25', 'Murutinga do Sul', 'SP');
            INSERT INTO `cidades` VALUES ('3228', '5', 'Mutuípe', 'BA');
            INSERT INTO `cidades` VALUES ('3229', '13', 'Mutum', 'MG');
            INSERT INTO `cidades` VALUES ('3230', '9', 'Mutunópolis', 'GO');
            INSERT INTO `cidades` VALUES ('3231', '13', 'Muzambinho', 'MG');
            INSERT INTO `cidades` VALUES ('3232', '13', 'Nacip Raydan', 'MG');
            INSERT INTO `cidades` VALUES ('3233', '25', 'Nantes', 'SP');
            INSERT INTO `cidades` VALUES ('3234', '13', 'Nanuque', 'MG');
            INSERT INTO `cidades` VALUES ('3235', '21', 'Não-Me-Toque', 'RS');
            INSERT INTO `cidades` VALUES ('3236', '13', 'Naque', 'MG');
            INSERT INTO `cidades` VALUES ('3237', '25', 'Narandiba', 'SP');
            INSERT INTO `cidades` VALUES ('3238', '20', 'Natal', 'RN');
            INSERT INTO `cidades` VALUES ('3239', '13', 'Natalândia', 'MG');
            INSERT INTO `cidades` VALUES ('3240', '13', 'Natércia', 'MG');
            INSERT INTO `cidades` VALUES ('3241', '19', 'Natividade', 'RJ');
            INSERT INTO `cidades` VALUES ('3242', '27', 'Natividade', 'TO');
            INSERT INTO `cidades` VALUES ('3243', '25', 'Natividade da Serra', 'SP');
            INSERT INTO `cidades` VALUES ('3244', '15', 'Natuba', 'PB');
            INSERT INTO `cidades` VALUES ('3245', '24', 'Navegantes', 'SC');
            INSERT INTO `cidades` VALUES ('3246', '12', 'Naviraí', 'MS');
            INSERT INTO `cidades` VALUES ('3247', '5', 'Nazaré', 'BA');
            INSERT INTO `cidades` VALUES ('3248', '27', 'Nazaré', 'TO');
            INSERT INTO `cidades` VALUES ('3249', '17', 'Nazaré da Mata', 'PE');
            INSERT INTO `cidades` VALUES ('3250', '18', 'Nazaré do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3251', '25', 'Nazaré Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('3252', '13', 'Nazareno', 'MG');
            INSERT INTO `cidades` VALUES ('3253', '15', 'Nazarezinho', 'PB');
            INSERT INTO `cidades` VALUES ('3254', '18', 'Nazária ', 'PI');
            INSERT INTO `cidades` VALUES ('3255', '9', 'Nazário', 'GO');
            INSERT INTO `cidades` VALUES ('3256', '26', 'Neópolis', 'SE');
            INSERT INTO `cidades` VALUES ('3257', '13', 'Nepomuceno', 'MG');
            INSERT INTO `cidades` VALUES ('3258', '9', 'Nerópolis', 'GO');
            INSERT INTO `cidades` VALUES ('3259', '25', 'Neves Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('3260', '4', 'Nhamundá', 'AM');
            INSERT INTO `cidades` VALUES ('3261', '25', 'Nhandeara', 'SP');
            INSERT INTO `cidades` VALUES ('3262', '21', 'Nicolau Vergueiro', 'RS');
            INSERT INTO `cidades` VALUES ('3263', '5', 'Nilo Peçanha', 'BA');
            INSERT INTO `cidades` VALUES ('3264', '19', 'Nilópolis', 'RJ');
            INSERT INTO `cidades` VALUES ('3265', '10', 'Nina Rodrigues', 'MA');
            INSERT INTO `cidades` VALUES ('3266', '13', 'Ninheira', 'MG');
            INSERT INTO `cidades` VALUES ('3267', '12', 'Nioaque', 'MS');
            INSERT INTO `cidades` VALUES ('3268', '25', 'Nipoã', 'SP');
            INSERT INTO `cidades` VALUES ('3269', '9', 'Niquelândia', 'GO');
            INSERT INTO `cidades` VALUES ('3270', '20', 'Nísia Floresta', 'RN');
            INSERT INTO `cidades` VALUES ('3271', '19', 'Niterói', 'RJ');
            INSERT INTO `cidades` VALUES ('3272', '11', 'Nobres', 'MT');
            INSERT INTO `cidades` VALUES ('3273', '21', 'Nonoai', 'RS');
            INSERT INTO `cidades` VALUES ('3274', '5', 'Nordestina', 'BA');
            INSERT INTO `cidades` VALUES ('3275', '23', 'Normandia', 'RR');
            INSERT INTO `cidades` VALUES ('3276', '11', 'Nortelândia', 'MT');
            INSERT INTO `cidades` VALUES ('3277', '26', 'Nossa Senhora Aparecida', 'SE');
            INSERT INTO `cidades` VALUES ('3278', '26', 'Nossa Senhora da Glória', 'SE');
            INSERT INTO `cidades` VALUES ('3279', '26', 'Nossa Senhora das Dores', 'SE');
            INSERT INTO `cidades` VALUES ('3280', '16', 'Nossa Senhora das Graças', 'PR');
            INSERT INTO `cidades` VALUES ('3281', '26', 'Nossa Senhora de Lourdes', 'SE');
            INSERT INTO `cidades` VALUES ('3282', '18', 'Nossa Senhora de Nazaré', 'PI');
            INSERT INTO `cidades` VALUES ('3283', '11', 'Nossa Senhora do Livramento', 'MT');
            INSERT INTO `cidades` VALUES ('3284', '26', 'Nossa Senhora do Socorro', 'SE');
            INSERT INTO `cidades` VALUES ('3285', '18', 'Nossa Senhora dos Remédios', 'PI');
            INSERT INTO `cidades` VALUES ('3286', '25', 'Nova Aliança', 'SP');
            INSERT INTO `cidades` VALUES ('3287', '16', 'Nova Aliança do Ivaí', 'PR');
            INSERT INTO `cidades` VALUES ('3288', '21', 'Nova Alvorada', 'RS');
            INSERT INTO `cidades` VALUES ('3289', '12', 'Nova Alvorada do Sul', 'MS');
            INSERT INTO `cidades` VALUES ('3290', '9', 'Nova América', 'GO');
            INSERT INTO `cidades` VALUES ('3291', '16', 'Nova América da Colina', 'PR');
            INSERT INTO `cidades` VALUES ('3292', '12', 'Nova Andradina', 'MS');
            INSERT INTO `cidades` VALUES ('3293', '21', 'Nova Araçá', 'RS');
            INSERT INTO `cidades` VALUES ('3294', '9', 'Nova Aurora', 'GO');
            INSERT INTO `cidades` VALUES ('3295', '16', 'Nova Aurora', 'PR');
            INSERT INTO `cidades` VALUES ('3296', '11', 'Nova Bandeirantes', 'MT');
            INSERT INTO `cidades` VALUES ('3297', '21', 'Nova Bassano', 'RS');
            INSERT INTO `cidades` VALUES ('3298', '13', 'Nova Belém', 'MG');
            INSERT INTO `cidades` VALUES ('3299', '21', 'Nova Boa Vista', 'RS');
            INSERT INTO `cidades` VALUES ('3300', '11', 'Nova Brasilândia', 'MT');
            INSERT INTO `cidades` VALUES ('3301', '22', 'Nova Brasilândia D\'Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('3302', '21', 'Nova Bréscia', 'RS');
            INSERT INTO `cidades` VALUES ('3303', '25', 'Nova Campina', 'SP');
            INSERT INTO `cidades` VALUES ('3304', '5', 'Nova Canaã', 'BA');
            INSERT INTO `cidades` VALUES ('3305', '11', 'Nova Canaã do Norte', 'MT');
            INSERT INTO `cidades` VALUES ('3306', '25', 'Nova Canaã Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('3307', '21', 'Nova Candelária', 'RS');
            INSERT INTO `cidades` VALUES ('3308', '16', 'Nova Cantu', 'PR');
            INSERT INTO `cidades` VALUES ('3309', '25', 'Nova Castilho', 'SP');
            INSERT INTO `cidades` VALUES ('3310', '10', 'Nova Colinas', 'MA');
            INSERT INTO `cidades` VALUES ('3311', '9', 'Nova Crixás', 'GO');
            INSERT INTO `cidades` VALUES ('3312', '20', 'Nova Cruz', 'RN');
            INSERT INTO `cidades` VALUES ('3313', '13', 'Nova Era', 'MG');
            INSERT INTO `cidades` VALUES ('3314', '24', 'Nova Erechim', 'SC');
            INSERT INTO `cidades` VALUES ('3315', '16', 'Nova Esperança', 'PR');
            INSERT INTO `cidades` VALUES ('3316', '14', 'Nova Esperança do Piriá', 'PA');
            INSERT INTO `cidades` VALUES ('3317', '16', 'Nova Esperança do Sudoeste', 'PR');
            INSERT INTO `cidades` VALUES ('3318', '21', 'Nova Esperança do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('3319', '25', 'Nova Europa', 'SP');
            INSERT INTO `cidades` VALUES ('3320', '5', 'Nova Fátima', 'BA');
            INSERT INTO `cidades` VALUES ('3321', '16', 'Nova Fátima', 'PR');
            INSERT INTO `cidades` VALUES ('3322', '15', 'Nova Floresta', 'PB');
            INSERT INTO `cidades` VALUES ('3323', '19', 'Nova Friburgo', 'RJ');
            INSERT INTO `cidades` VALUES ('3324', '9', 'Nova Glória', 'GO');
            INSERT INTO `cidades` VALUES ('3325', '25', 'Nova Granada', 'SP');
            INSERT INTO `cidades` VALUES ('3326', '11', 'Nova Guarita', 'MT');
            INSERT INTO `cidades` VALUES ('3327', '25', 'Nova Guataporanga', 'SP');
            INSERT INTO `cidades` VALUES ('3328', '21', 'Nova Hartz', 'RS');
            INSERT INTO `cidades` VALUES ('3329', '5', 'Nova Ibiá', 'BA');
            INSERT INTO `cidades` VALUES ('3330', '19', 'Nova Iguaçu', 'RJ');
            INSERT INTO `cidades` VALUES ('3331', '9', 'Nova Iguaçu de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3332', '25', 'Nova Independência', 'SP');
            INSERT INTO `cidades` VALUES ('3333', '10', 'Nova Iorque', 'MA');
            INSERT INTO `cidades` VALUES ('3334', '14', 'Nova Ipixuna', 'PA');
            INSERT INTO `cidades` VALUES ('3335', '24', 'Nova Itaberaba', 'SC');
            INSERT INTO `cidades` VALUES ('3336', '5', 'Nova Itarana', 'BA');
            INSERT INTO `cidades` VALUES ('3337', '11', 'Nova Lacerda', 'MT');
            INSERT INTO `cidades` VALUES ('3338', '16', 'Nova Laranjeiras', 'PR');
            INSERT INTO `cidades` VALUES ('3339', '13', 'Nova Lima', 'MG');
            INSERT INTO `cidades` VALUES ('3340', '16', 'Nova Londrina', 'PR');
            INSERT INTO `cidades` VALUES ('3341', '25', 'Nova Luzitânia', 'SP');
            INSERT INTO `cidades` VALUES ('3342', '22', 'Nova Mamoré', 'RO');
            INSERT INTO `cidades` VALUES ('3343', '11', 'Nova Marilândia', 'MT');
            INSERT INTO `cidades` VALUES ('3344', '11', 'Nova Maringá', 'MT');
            INSERT INTO `cidades` VALUES ('3345', '13', 'Nova Módica', 'MG');
            INSERT INTO `cidades` VALUES ('3346', '11', 'Nova Monte Verde', 'MT');
            INSERT INTO `cidades` VALUES ('3347', '11', 'Nova Mutum', 'MT');
            INSERT INTO `cidades` VALUES ('3348', '11', 'Nova Nazaré', 'MT');
            INSERT INTO `cidades` VALUES ('3349', '25', 'Nova Odessa', 'SP');
            INSERT INTO `cidades` VALUES ('3350', '11', 'Nova Olímpia', 'MT');
            INSERT INTO `cidades` VALUES ('3351', '16', 'Nova Olímpia', 'PR');
            INSERT INTO `cidades` VALUES ('3352', '6', 'Nova Olinda', 'CE');
            INSERT INTO `cidades` VALUES ('3353', '15', 'Nova Olinda', 'PB');
            INSERT INTO `cidades` VALUES ('3354', '27', 'Nova Olinda', 'TO');
            INSERT INTO `cidades` VALUES ('3355', '10', 'Nova Olinda do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('3356', '4', 'Nova Olinda do Norte', 'AM');
            INSERT INTO `cidades` VALUES ('3357', '21', 'Nova Pádua', 'RS');
            INSERT INTO `cidades` VALUES ('3358', '21', 'Nova Palma', 'RS');
            INSERT INTO `cidades` VALUES ('3359', '15', 'Nova Palmeira', 'PB');
            INSERT INTO `cidades` VALUES ('3360', '21', 'Nova Petrópolis', 'RS');
            INSERT INTO `cidades` VALUES ('3361', '13', 'Nova Ponte', 'MG');
            INSERT INTO `cidades` VALUES ('3362', '13', 'Nova Porteirinha', 'MG');
            INSERT INTO `cidades` VALUES ('3363', '21', 'Nova Prata', 'RS');
            INSERT INTO `cidades` VALUES ('3364', '16', 'Nova Prata do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('3365', '21', 'Nova Ramada', 'RS');
            INSERT INTO `cidades` VALUES ('3366', '5', 'Nova Redenção', 'BA');
            INSERT INTO `cidades` VALUES ('3367', '13', 'Nova Resende', 'MG');
            INSERT INTO `cidades` VALUES ('3368', '9', 'Nova Roma', 'GO');
            INSERT INTO `cidades` VALUES ('3369', '21', 'Nova Roma do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('3370', '27', 'Nova Rosalândia', 'TO');
            INSERT INTO `cidades` VALUES ('3371', '6', 'Nova Russas', 'CE');
            INSERT INTO `cidades` VALUES ('3372', '16', 'Nova Santa Bárbara', 'PR');
            INSERT INTO `cidades` VALUES ('3373', '11', 'Nova Santa Helena', 'MT');
            INSERT INTO `cidades` VALUES ('3374', '18', 'Nova Santa Rita', 'PI');
            INSERT INTO `cidades` VALUES ('3375', '21', 'Nova Santa Rita', 'RS');
            INSERT INTO `cidades` VALUES ('3376', '16', 'Nova Santa Rosa', 'PR');
            INSERT INTO `cidades` VALUES ('3377', '13', 'Nova Serrana', 'MG');
            INSERT INTO `cidades` VALUES ('3378', '5', 'Nova Soure', 'BA');
            INSERT INTO `cidades` VALUES ('3379', '16', 'Nova Tebas', 'PR');
            INSERT INTO `cidades` VALUES ('3380', '14', 'Nova Timboteua', 'PA');
            INSERT INTO `cidades` VALUES ('3381', '24', 'Nova Trento', 'SC');
            INSERT INTO `cidades` VALUES ('3382', '11', 'Nova Ubiratã', 'MT');
            INSERT INTO `cidades` VALUES ('3383', '13', 'Nova União', 'MG');
            INSERT INTO `cidades` VALUES ('3384', '22', 'Nova União', 'RO');
            INSERT INTO `cidades` VALUES ('3385', '8', 'Nova Venécia', 'ES');
            INSERT INTO `cidades` VALUES ('3386', '9', 'Nova Veneza', 'GO');
            INSERT INTO `cidades` VALUES ('3387', '24', 'Nova Veneza', 'SC');
            INSERT INTO `cidades` VALUES ('3388', '5', 'Nova Viçosa', 'BA');
            INSERT INTO `cidades` VALUES ('3389', '11', 'Nova Xavantina', 'MT');
            INSERT INTO `cidades` VALUES ('3390', '25', 'Novais', 'SP');
            INSERT INTO `cidades` VALUES ('3391', '27', 'Novo Acordo', 'TO');
            INSERT INTO `cidades` VALUES ('3392', '4', 'Novo Airão', 'AM');
            INSERT INTO `cidades` VALUES ('3393', '27', 'Novo Alegre', 'TO');
            INSERT INTO `cidades` VALUES ('3394', '4', 'Novo Aripuanã', 'AM');
            INSERT INTO `cidades` VALUES ('3395', '21', 'Novo Barreiro', 'RS');
            INSERT INTO `cidades` VALUES ('3396', '9', 'Novo Brasil', 'GO');
            INSERT INTO `cidades` VALUES ('3397', '21', 'Novo Cabrais', 'RS');
            INSERT INTO `cidades` VALUES ('3398', '13', 'Novo Cruzeiro', 'MG');
            INSERT INTO `cidades` VALUES ('3399', '9', 'Novo Gama', 'GO');
            INSERT INTO `cidades` VALUES ('3400', '21', 'Novo Hamburgo', 'RS');
            INSERT INTO `cidades` VALUES ('3401', '5', 'Novo Horizonte', 'BA');
            INSERT INTO `cidades` VALUES ('3402', '24', 'Novo Horizonte', 'SC');
            INSERT INTO `cidades` VALUES ('3403', '25', 'Novo Horizonte', 'SP');
            INSERT INTO `cidades` VALUES ('3404', '11', 'Novo Horizonte do Norte', 'MT');
            INSERT INTO `cidades` VALUES ('3405', '22', 'Novo Horizonte do Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('3406', '12', 'Novo Horizonte do Sul', 'MS');
            INSERT INTO `cidades` VALUES ('3407', '16', 'Novo Itacolomi', 'PR');
            INSERT INTO `cidades` VALUES ('3408', '27', 'Novo Jardim', 'TO');
            INSERT INTO `cidades` VALUES ('3409', '2', 'Novo Lino', 'AL');
            INSERT INTO `cidades` VALUES ('3410', '21', 'Novo Machado', 'RS');
            INSERT INTO `cidades` VALUES ('3411', '11', 'Novo Mundo', 'MT');
            INSERT INTO `cidades` VALUES ('3412', '6', 'Novo Oriente', 'CE');
            INSERT INTO `cidades` VALUES ('3413', '13', 'Novo Oriente de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('3414', '18', 'Novo Oriente do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3415', '9', 'Novo Planalto', 'GO');
            INSERT INTO `cidades` VALUES ('3416', '14', 'Novo Progresso', 'PA');
            INSERT INTO `cidades` VALUES ('3417', '14', 'Novo Repartimento', 'PA');
            INSERT INTO `cidades` VALUES ('3418', '11', 'Novo Santo Antônio', 'MT');
            INSERT INTO `cidades` VALUES ('3419', '18', 'Novo Santo Antônio', 'PI');
            INSERT INTO `cidades` VALUES ('3420', '11', 'Novo São Joaquim', 'MT');
            INSERT INTO `cidades` VALUES ('3421', '21', 'Novo Tiradentes', 'RS');
            INSERT INTO `cidades` VALUES ('3422', '5', 'Novo Triunfo', 'BA');
            INSERT INTO `cidades` VALUES ('3423', '21', 'Novo Xingu', 'RS');
            INSERT INTO `cidades` VALUES ('3424', '13', 'Novorizonte', 'MG');
            INSERT INTO `cidades` VALUES ('3425', '25', 'Nuporanga', 'SP');
            INSERT INTO `cidades` VALUES ('3426', '14', 'Óbidos', 'PA');
            INSERT INTO `cidades` VALUES ('3427', '6', 'Ocara', 'CE');
            INSERT INTO `cidades` VALUES ('3428', '25', 'Ocauçu', 'SP');
            INSERT INTO `cidades` VALUES ('3429', '18', 'Oeiras', 'PI');
            INSERT INTO `cidades` VALUES ('3430', '14', 'Oeiras do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('3431', '3', 'Oiapoque', 'AP');
            INSERT INTO `cidades` VALUES ('3432', '13', 'Olaria', 'MG');
            INSERT INTO `cidades` VALUES ('3433', '25', 'Óleo', 'SP');
            INSERT INTO `cidades` VALUES ('3434', '15', 'Olho d\'Água', 'PB');
            INSERT INTO `cidades` VALUES ('3435', '10', 'Olho d\'Água das Cunhãs', 'MA');
            INSERT INTO `cidades` VALUES ('3436', '2', 'Olho d\'Água das Flores', 'AL');
            INSERT INTO `cidades` VALUES ('3437', '2', 'Olho d\'Água do Casado', 'AL');
            INSERT INTO `cidades` VALUES ('3438', '18', 'Olho D\'Água do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3439', '2', 'Olho d\'Água Grande', 'AL');
            INSERT INTO `cidades` VALUES ('3440', '20', 'Olho-d\'Água do Borges', 'RN');
            INSERT INTO `cidades` VALUES ('3441', '13', 'Olhos-d\'Água', 'MG');
            INSERT INTO `cidades` VALUES ('3442', '25', 'Olímpia', 'SP');
            INSERT INTO `cidades` VALUES ('3443', '13', 'Olímpio Noronha', 'MG');
            INSERT INTO `cidades` VALUES ('3444', '17', 'Olinda', 'PE');
            INSERT INTO `cidades` VALUES ('3445', '10', 'Olinda Nova do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('3446', '5', 'Olindina', 'BA');
            INSERT INTO `cidades` VALUES ('3447', '15', 'Olivedos', 'PB');
            INSERT INTO `cidades` VALUES ('3448', '13', 'Oliveira', 'MG');
            INSERT INTO `cidades` VALUES ('3449', '27', 'Oliveira de Fátima', 'TO');
            INSERT INTO `cidades` VALUES ('3450', '5', 'Oliveira dos Brejinhos', 'BA');
            INSERT INTO `cidades` VALUES ('3451', '13', 'Oliveira Fortes', 'MG');
            INSERT INTO `cidades` VALUES ('3452', '2', 'Olivença', 'AL');
            INSERT INTO `cidades` VALUES ('3453', '13', 'Onça de Pitangui', 'MG');
            INSERT INTO `cidades` VALUES ('3454', '25', 'Onda Verde', 'SP');
            INSERT INTO `cidades` VALUES ('3455', '13', 'Oratórios', 'MG');
            INSERT INTO `cidades` VALUES ('3456', '25', 'Oriente', 'SP');
            INSERT INTO `cidades` VALUES ('3457', '25', 'Orindiúva', 'SP');
            INSERT INTO `cidades` VALUES ('3458', '14', 'Oriximiná', 'PA');
            INSERT INTO `cidades` VALUES ('3459', '13', 'Orizânia', 'MG');
            INSERT INTO `cidades` VALUES ('3460', '9', 'Orizona', 'GO');
            INSERT INTO `cidades` VALUES ('3461', '25', 'Orlândia', 'SP');
            INSERT INTO `cidades` VALUES ('3462', '24', 'Orleans', 'SC');
            INSERT INTO `cidades` VALUES ('3463', '17', 'Orobó', 'PE');
            INSERT INTO `cidades` VALUES ('3464', '17', 'Orocó', 'PE');
            INSERT INTO `cidades` VALUES ('3465', '6', 'Orós', 'CE');
            INSERT INTO `cidades` VALUES ('3466', '16', 'Ortigueira', 'PR');
            INSERT INTO `cidades` VALUES ('3467', '25', 'Osasco', 'SP');
            INSERT INTO `cidades` VALUES ('3468', '25', 'Oscar Bressane', 'SP');
            INSERT INTO `cidades` VALUES ('3469', '21', 'Osório', 'RS');
            INSERT INTO `cidades` VALUES ('3470', '25', 'Osvaldo Cruz', 'SP');
            INSERT INTO `cidades` VALUES ('3471', '24', 'Otacílio Costa', 'SC');
            INSERT INTO `cidades` VALUES ('3472', '14', 'Ourém', 'PA');
            INSERT INTO `cidades` VALUES ('3473', '5', 'Ouriçangas', 'BA');
            INSERT INTO `cidades` VALUES ('3474', '17', 'Ouricuri', 'PE');
            INSERT INTO `cidades` VALUES ('3475', '14', 'Ourilândia do Norte', 'PA');
            INSERT INTO `cidades` VALUES ('3476', '25', 'Ourinhos', 'SP');
            INSERT INTO `cidades` VALUES ('3477', '16', 'Ourizona', 'PR');
            INSERT INTO `cidades` VALUES ('3478', '24', 'Ouro', 'SC');
            INSERT INTO `cidades` VALUES ('3479', '2', 'Ouro Branco', 'AL');
            INSERT INTO `cidades` VALUES ('3480', '13', 'Ouro Branco', 'MG');
            INSERT INTO `cidades` VALUES ('3481', '20', 'Ouro Branco', 'RN');
            INSERT INTO `cidades` VALUES ('3482', '13', 'Ouro Fino', 'MG');
            INSERT INTO `cidades` VALUES ('3483', '13', 'Ouro Preto', 'MG');
            INSERT INTO `cidades` VALUES ('3484', '22', 'Ouro Preto do Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('3485', '15', 'Ouro Velho', 'PB');
            INSERT INTO `cidades` VALUES ('3486', '24', 'Ouro Verde', 'SC');
            INSERT INTO `cidades` VALUES ('3487', '25', 'Ouro Verde', 'SP');
            INSERT INTO `cidades` VALUES ('3488', '9', 'Ouro Verde de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3489', '13', 'Ouro Verde de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('3490', '16', 'Ouro Verde do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('3491', '25', 'Ouroeste', 'SP');
            INSERT INTO `cidades` VALUES ('3492', '5', 'Ourolândia', 'BA');
            INSERT INTO `cidades` VALUES ('3493', '9', 'Ouvidor', 'GO');
            INSERT INTO `cidades` VALUES ('3494', '25', 'Pacaembu', 'SP');
            INSERT INTO `cidades` VALUES ('3495', '14', 'Pacajá', 'PA');
            INSERT INTO `cidades` VALUES ('3496', '6', 'Pacajus', 'CE');
            INSERT INTO `cidades` VALUES ('3497', '23', 'Pacaraima', 'RR');
            INSERT INTO `cidades` VALUES ('3498', '6', 'Pacatuba', 'CE');
            INSERT INTO `cidades` VALUES ('3499', '26', 'Pacatuba', 'SE');
            INSERT INTO `cidades` VALUES ('3500', '10', 'Paço do Lumiar', 'MA');
            INSERT INTO `cidades` VALUES ('3501', '6', 'Pacoti', 'CE');
            INSERT INTO `cidades` VALUES ('3502', '6', 'Pacujá', 'CE');
            INSERT INTO `cidades` VALUES ('3503', '9', 'Padre Bernardo', 'GO');
            INSERT INTO `cidades` VALUES ('3504', '13', 'Padre Carvalho', 'MG');
            INSERT INTO `cidades` VALUES ('3505', '18', 'Padre Marcos', 'PI');
            INSERT INTO `cidades` VALUES ('3506', '13', 'Padre Paraíso', 'MG');
            INSERT INTO `cidades` VALUES ('3507', '18', 'Paes Landim', 'PI');
            INSERT INTO `cidades` VALUES ('3508', '13', 'Pai Pedro', 'MG');
            INSERT INTO `cidades` VALUES ('3509', '24', 'Paial', 'SC');
            INSERT INTO `cidades` VALUES ('3510', '16', 'Paiçandu', 'PR');
            INSERT INTO `cidades` VALUES ('3511', '21', 'Paim Filho', 'RS');
            INSERT INTO `cidades` VALUES ('3512', '13', 'Paineiras', 'MG');
            INSERT INTO `cidades` VALUES ('3513', '24', 'Painel', 'SC');
            INSERT INTO `cidades` VALUES ('3514', '13', 'Pains', 'MG');
            INSERT INTO `cidades` VALUES ('3515', '13', 'Paiva', 'MG');
            INSERT INTO `cidades` VALUES ('3516', '18', 'Pajeú do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3517', '2', 'Palestina', 'AL');
            INSERT INTO `cidades` VALUES ('3518', '25', 'Palestina', 'SP');
            INSERT INTO `cidades` VALUES ('3519', '9', 'Palestina de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3520', '14', 'Palestina do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('3521', '6', 'Palhano', 'CE');
            INSERT INTO `cidades` VALUES ('3522', '24', 'Palhoça', 'SC');
            INSERT INTO `cidades` VALUES ('3523', '13', 'Palma', 'MG');
            INSERT INTO `cidades` VALUES ('3524', '24', 'Palma Sola', 'SC');
            INSERT INTO `cidades` VALUES ('3525', '6', 'Palmácia', 'CE');
            INSERT INTO `cidades` VALUES ('3526', '17', 'Palmares', 'PE');
            INSERT INTO `cidades` VALUES ('3527', '21', 'Palmares do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('3528', '25', 'Palmares Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('3529', '16', 'Palmas', 'PR');
            INSERT INTO `cidades` VALUES ('3530', '27', 'Palmas', 'TO');
            INSERT INTO `cidades` VALUES ('3531', '5', 'Palmas de Monte Alto', 'BA');
            INSERT INTO `cidades` VALUES ('3532', '16', 'Palmeira', 'PR');
            INSERT INTO `cidades` VALUES ('3533', '24', 'Palmeira', 'SC');
            INSERT INTO `cidades` VALUES ('3534', '21', 'Palmeira das Missões', 'RS');
            INSERT INTO `cidades` VALUES ('3535', '18', 'Palmeira do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3536', '25', 'Palmeira d\'Oeste', 'SP');
            INSERT INTO `cidades` VALUES ('3537', '2', 'Palmeira dos Índios', 'AL');
            INSERT INTO `cidades` VALUES ('3538', '18', 'Palmeirais', 'PI');
            INSERT INTO `cidades` VALUES ('3539', '10', 'Palmeirândia', 'MA');
            INSERT INTO `cidades` VALUES ('3540', '27', 'Palmeirante', 'TO');
            INSERT INTO `cidades` VALUES ('3541', '5', 'Palmeiras', 'BA');
            INSERT INTO `cidades` VALUES ('3542', '9', 'Palmeiras de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3543', '27', 'Palmeiras do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('3544', '17', 'Palmeirina', 'PE');
            INSERT INTO `cidades` VALUES ('3545', '27', 'Palmeirópolis', 'TO');
            INSERT INTO `cidades` VALUES ('3546', '9', 'Palmelo', 'GO');
            INSERT INTO `cidades` VALUES ('3547', '9', 'Palminópolis', 'GO');
            INSERT INTO `cidades` VALUES ('3548', '16', 'Palmital', 'PR');
            INSERT INTO `cidades` VALUES ('3549', '25', 'Palmital', 'SP');
            INSERT INTO `cidades` VALUES ('3550', '21', 'Palmitinho', 'RS');
            INSERT INTO `cidades` VALUES ('3551', '24', 'Palmitos', 'SC');
            INSERT INTO `cidades` VALUES ('3552', '13', 'Palmópolis', 'MG');
            INSERT INTO `cidades` VALUES ('3553', '16', 'Palotina', 'PR');
            INSERT INTO `cidades` VALUES ('3554', '9', 'Panamá', 'GO');
            INSERT INTO `cidades` VALUES ('3555', '21', 'Panambi', 'RS');
            INSERT INTO `cidades` VALUES ('3556', '8', 'Pancas', 'ES');
            INSERT INTO `cidades` VALUES ('3557', '17', 'Panelas', 'PE');
            INSERT INTO `cidades` VALUES ('3558', '25', 'Panorama', 'SP');
            INSERT INTO `cidades` VALUES ('3559', '21', 'Pantano Grande', 'RS');
            INSERT INTO `cidades` VALUES ('3560', '2', 'Pão de Açúcar', 'AL');
            INSERT INTO `cidades` VALUES ('3561', '13', 'Papagaios', 'MG');
            INSERT INTO `cidades` VALUES ('3562', '24', 'Papanduva', 'SC');
            INSERT INTO `cidades` VALUES ('3563', '18', 'Paquetá', 'PI');
            INSERT INTO `cidades` VALUES ('3564', '13', 'Pará de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('3565', '19', 'Paracambi', 'RJ');
            INSERT INTO `cidades` VALUES ('3566', '13', 'Paracatu', 'MG');
            INSERT INTO `cidades` VALUES ('3567', '6', 'Paracuru', 'CE');
            INSERT INTO `cidades` VALUES ('3568', '14', 'Paragominas', 'PA');
            INSERT INTO `cidades` VALUES ('3569', '13', 'Paraguaçu', 'MG');
            INSERT INTO `cidades` VALUES ('3570', '25', 'Paraguaçu Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('3571', '21', 'Paraí', 'RS');
            INSERT INTO `cidades` VALUES ('3572', '19', 'Paraíba do Sul', 'RJ');
            INSERT INTO `cidades` VALUES ('3573', '10', 'Paraibano', 'MA');
            INSERT INTO `cidades` VALUES ('3574', '25', 'Paraibuna', 'SP');
            INSERT INTO `cidades` VALUES ('3575', '6', 'Paraipaba', 'CE');
            INSERT INTO `cidades` VALUES ('3576', '24', 'Paraíso', 'SC');
            INSERT INTO `cidades` VALUES ('3577', '25', 'Paraíso', 'SP');
            INSERT INTO `cidades` VALUES ('3578', '16', 'Paraíso do Norte', 'PR');
            INSERT INTO `cidades` VALUES ('3579', '21', 'Paraíso do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('3580', '27', 'Paraíso do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('3581', '13', 'Paraisópolis', 'MG');
            INSERT INTO `cidades` VALUES ('3582', '6', 'Parambu', 'CE');
            INSERT INTO `cidades` VALUES ('3583', '5', 'Paramirim', 'BA');
            INSERT INTO `cidades` VALUES ('3584', '6', 'Paramoti', 'CE');
            INSERT INTO `cidades` VALUES ('3585', '20', 'Paraná', 'RN');
            INSERT INTO `cidades` VALUES ('3586', '27', 'Paranã', 'TO');
            INSERT INTO `cidades` VALUES ('3587', '16', 'Paranacity', 'PR');
            INSERT INTO `cidades` VALUES ('3588', '16', 'Paranaguá', 'PR');
            INSERT INTO `cidades` VALUES ('3589', '12', 'Paranaíba', 'MS');
            INSERT INTO `cidades` VALUES ('3590', '9', 'Paranaiguara', 'GO');
            INSERT INTO `cidades` VALUES ('3591', '11', 'Paranaíta', 'MT');
            INSERT INTO `cidades` VALUES ('3592', '25', 'Paranapanema', 'SP');
            INSERT INTO `cidades` VALUES ('3593', '16', 'Paranapoema', 'PR');
            INSERT INTO `cidades` VALUES ('3594', '25', 'Paranapuã', 'SP');
            INSERT INTO `cidades` VALUES ('3595', '17', 'Paranatama', 'PE');
            INSERT INTO `cidades` VALUES ('3596', '11', 'Paranatinga', 'MT');
            INSERT INTO `cidades` VALUES ('3597', '16', 'Paranavaí', 'PR');
            INSERT INTO `cidades` VALUES ('3598', '12', 'Paranhos', 'MS');
            INSERT INTO `cidades` VALUES ('3599', '13', 'Paraopeba', 'MG');
            INSERT INTO `cidades` VALUES ('3600', '25', 'Parapuã', 'SP');
            INSERT INTO `cidades` VALUES ('3601', '15', 'Parari', 'PB');
            INSERT INTO `cidades` VALUES ('3602', '5', 'Paratinga', 'BA');
            INSERT INTO `cidades` VALUES ('3603', '19', 'Paraty', 'RJ');
            INSERT INTO `cidades` VALUES ('3604', '20', 'Paraú', 'RN');
            INSERT INTO `cidades` VALUES ('3605', '14', 'Parauapebas', 'PA');
            INSERT INTO `cidades` VALUES ('3606', '9', 'Paraúna', 'GO');
            INSERT INTO `cidades` VALUES ('3607', '20', 'Parazinho', 'RN');
            INSERT INTO `cidades` VALUES ('3608', '25', 'Pardinho', 'SP');
            INSERT INTO `cidades` VALUES ('3609', '21', 'Pareci Novo', 'RS');
            INSERT INTO `cidades` VALUES ('3610', '22', 'Parecis', 'RO');
            INSERT INTO `cidades` VALUES ('3611', '20', 'Parelhas', 'RN');
            INSERT INTO `cidades` VALUES ('3612', '2', 'Pariconha', 'AL');
            INSERT INTO `cidades` VALUES ('3613', '4', 'Parintins', 'AM');
            INSERT INTO `cidades` VALUES ('3614', '5', 'Paripiranga', 'BA');
            INSERT INTO `cidades` VALUES ('3615', '2', 'Paripueira', 'AL');
            INSERT INTO `cidades` VALUES ('3616', '25', 'Pariquera-Açu', 'SP');
            INSERT INTO `cidades` VALUES ('3617', '25', 'Parisi', 'SP');
            INSERT INTO `cidades` VALUES ('3618', '18', 'Parnaguá', 'PI');
            INSERT INTO `cidades` VALUES ('3619', '18', 'Parnaíba', 'PI');
            INSERT INTO `cidades` VALUES ('3620', '17', 'Parnamirim', 'PE');
            INSERT INTO `cidades` VALUES ('3621', '20', 'Parnamirim', 'RN');
            INSERT INTO `cidades` VALUES ('3622', '10', 'Parnarama', 'MA');
            INSERT INTO `cidades` VALUES ('3623', '21', 'Parobé', 'RS');
            INSERT INTO `cidades` VALUES ('3624', '20', 'Passa e Fica', 'RN');
            INSERT INTO `cidades` VALUES ('3625', '13', 'Passa Quatro', 'MG');
            INSERT INTO `cidades` VALUES ('3626', '21', 'Passa Sete', 'RS');
            INSERT INTO `cidades` VALUES ('3627', '13', 'Passa Tempo', 'MG');
            INSERT INTO `cidades` VALUES ('3628', '13', 'Passabém', 'MG');
            INSERT INTO `cidades` VALUES ('3629', '15', 'Passagem', 'PB');
            INSERT INTO `cidades` VALUES ('3630', '20', 'Passagem', 'RN');
            INSERT INTO `cidades` VALUES ('3631', '10', 'Passagem Franca', 'MA');
            INSERT INTO `cidades` VALUES ('3632', '18', 'Passagem Franca do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3633', '13', 'Passa-Vinte', 'MG');
            INSERT INTO `cidades` VALUES ('3634', '17', 'Passira', 'PE');
            INSERT INTO `cidades` VALUES ('3635', '2', 'Passo de Camaragibe', 'AL');
            INSERT INTO `cidades` VALUES ('3636', '24', 'Passo de Torres', 'SC');
            INSERT INTO `cidades` VALUES ('3637', '21', 'Passo do Sobrado', 'RS');
            INSERT INTO `cidades` VALUES ('3638', '21', 'Passo Fundo', 'RS');
            INSERT INTO `cidades` VALUES ('3639', '13', 'Passos', 'MG');
            INSERT INTO `cidades` VALUES ('3640', '24', 'Passos Maia', 'SC');
            INSERT INTO `cidades` VALUES ('3641', '10', 'Pastos Bons', 'MA');
            INSERT INTO `cidades` VALUES ('3642', '13', 'Patis', 'MG');
            INSERT INTO `cidades` VALUES ('3643', '16', 'Pato Bragado', 'PR');
            INSERT INTO `cidades` VALUES ('3644', '16', 'Pato Branco', 'PR');
            INSERT INTO `cidades` VALUES ('3645', '15', 'Patos', 'PB');
            INSERT INTO `cidades` VALUES ('3646', '13', 'Patos de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('3647', '18', 'Patos do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3648', '13', 'Patrocínio', 'MG');
            INSERT INTO `cidades` VALUES ('3649', '13', 'Patrocínio do Muriaé', 'MG');
            INSERT INTO `cidades` VALUES ('3650', '25', 'Patrocínio Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('3651', '20', 'Patu', 'RN');
            INSERT INTO `cidades` VALUES ('3652', '19', 'Paty do Alferes', 'RJ');
            INSERT INTO `cidades` VALUES ('3653', '5', 'Pau Brasil', 'BA');
            INSERT INTO `cidades` VALUES ('3654', '14', 'Pau D\'Arco', 'PA');
            INSERT INTO `cidades` VALUES ('3655', '27', 'Pau D\'Arco', 'TO');
            INSERT INTO `cidades` VALUES ('3656', '18', 'Pau D\'Arco do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3657', '20', 'Pau dos Ferros', 'RN');
            INSERT INTO `cidades` VALUES ('3658', '17', 'Paudalho', 'PE');
            INSERT INTO `cidades` VALUES ('3659', '4', 'Pauini', 'AM');
            INSERT INTO `cidades` VALUES ('3660', '13', 'Paula Cândido', 'MG');
            INSERT INTO `cidades` VALUES ('3661', '16', 'Paula Freitas', 'PR');
            INSERT INTO `cidades` VALUES ('3662', '25', 'Paulicéia', 'SP');
            INSERT INTO `cidades` VALUES ('3663', '25', 'Paulínia', 'SP');
            INSERT INTO `cidades` VALUES ('3664', '10', 'Paulino Neves', 'MA');
            INSERT INTO `cidades` VALUES ('3665', '15', 'Paulista', 'PB');
            INSERT INTO `cidades` VALUES ('3666', '17', 'Paulista', 'PE');
            INSERT INTO `cidades` VALUES ('3667', '18', 'Paulistana', 'PI');
            INSERT INTO `cidades` VALUES ('3668', '25', 'Paulistânia', 'SP');
            INSERT INTO `cidades` VALUES ('3669', '13', 'Paulistas', 'MG');
            INSERT INTO `cidades` VALUES ('3670', '5', 'Paulo Afonso', 'BA');
            INSERT INTO `cidades` VALUES ('3671', '21', 'Paulo Bento', 'RS');
            INSERT INTO `cidades` VALUES ('3672', '25', 'Paulo de Faria', 'SP');
            INSERT INTO `cidades` VALUES ('3673', '16', 'Paulo Frontin', 'PR');
            INSERT INTO `cidades` VALUES ('3674', '2', 'Paulo Jacinto', 'AL');
            INSERT INTO `cidades` VALUES ('3675', '24', 'Paulo Lopes', 'SC');
            INSERT INTO `cidades` VALUES ('3676', '10', 'Paulo Ramos', 'MA');
            INSERT INTO `cidades` VALUES ('3677', '13', 'Pavão', 'MG');
            INSERT INTO `cidades` VALUES ('3678', '21', 'Paverama', 'RS');
            INSERT INTO `cidades` VALUES ('3679', '18', 'Pavussu', 'PI');
            INSERT INTO `cidades` VALUES ('3680', '5', 'Pé de Serra', 'BA');
            INSERT INTO `cidades` VALUES ('3681', '16', 'Peabiru', 'PR');
            INSERT INTO `cidades` VALUES ('3682', '13', 'Peçanha', 'MG');
            INSERT INTO `cidades` VALUES ('3683', '25', 'Pederneiras', 'SP');
            INSERT INTO `cidades` VALUES ('3684', '17', 'Pedra', 'PE');
            INSERT INTO `cidades` VALUES ('3685', '13', 'Pedra Azul', 'MG');
            INSERT INTO `cidades` VALUES ('3686', '25', 'Pedra Bela', 'SP');
            INSERT INTO `cidades` VALUES ('3687', '13', 'Pedra Bonita', 'MG');
            INSERT INTO `cidades` VALUES ('3688', '6', 'Pedra Branca', 'CE');
            INSERT INTO `cidades` VALUES ('3689', '15', 'Pedra Branca', 'PB');
            INSERT INTO `cidades` VALUES ('3690', '3', 'Pedra Branca do Amapari', 'AP');
            INSERT INTO `cidades` VALUES ('3691', '13', 'Pedra do Anta', 'MG');
            INSERT INTO `cidades` VALUES ('3692', '13', 'Pedra do Indaiá', 'MG');
            INSERT INTO `cidades` VALUES ('3693', '13', 'Pedra Dourada', 'MG');
            INSERT INTO `cidades` VALUES ('3694', '20', 'Pedra Grande', 'RN');
            INSERT INTO `cidades` VALUES ('3695', '15', 'Pedra Lavrada', 'PB');
            INSERT INTO `cidades` VALUES ('3696', '26', 'Pedra Mole', 'SE');
            INSERT INTO `cidades` VALUES ('3697', '11', 'Pedra Preta', 'MT');
            INSERT INTO `cidades` VALUES ('3698', '20', 'Pedra Preta', 'RN');
            INSERT INTO `cidades` VALUES ('3699', '13', 'Pedralva', 'MG');
            INSERT INTO `cidades` VALUES ('3700', '25', 'Pedranópolis', 'SP');
            INSERT INTO `cidades` VALUES ('3701', '5', 'Pedrão', 'BA');
            INSERT INTO `cidades` VALUES ('3702', '21', 'Pedras Altas', 'RS');
            INSERT INTO `cidades` VALUES ('3703', '15', 'Pedras de Fogo', 'PB');
            INSERT INTO `cidades` VALUES ('3704', '13', 'Pedras de Maria da Cruz', 'MG');
            INSERT INTO `cidades` VALUES ('3705', '24', 'Pedras Grandes', 'SC');
            INSERT INTO `cidades` VALUES ('3706', '25', 'Pedregulho', 'SP');
            INSERT INTO `cidades` VALUES ('3707', '25', 'Pedreira', 'SP');
            INSERT INTO `cidades` VALUES ('3708', '10', 'Pedreiras', 'MA');
            INSERT INTO `cidades` VALUES ('3709', '26', 'Pedrinhas', 'SE');
            INSERT INTO `cidades` VALUES ('3710', '25', 'Pedrinhas Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('3711', '13', 'Pedrinópolis', 'MG');
            INSERT INTO `cidades` VALUES ('3712', '27', 'Pedro Afonso', 'TO');
            INSERT INTO `cidades` VALUES ('3713', '5', 'Pedro Alexandre', 'BA');
            INSERT INTO `cidades` VALUES ('3714', '20', 'Pedro Avelino', 'RN');
            INSERT INTO `cidades` VALUES ('3715', '8', 'Pedro Canário', 'ES');
            INSERT INTO `cidades` VALUES ('3716', '25', 'Pedro de Toledo', 'SP');
            INSERT INTO `cidades` VALUES ('3717', '10', 'Pedro do Rosário', 'MA');
            INSERT INTO `cidades` VALUES ('3718', '12', 'Pedro Gomes', 'MS');
            INSERT INTO `cidades` VALUES ('3719', '18', 'Pedro II', 'PI');
            INSERT INTO `cidades` VALUES ('3720', '18', 'Pedro Laurentino', 'PI');
            INSERT INTO `cidades` VALUES ('3721', '13', 'Pedro Leopoldo', 'MG');
            INSERT INTO `cidades` VALUES ('3722', '21', 'Pedro Osório', 'RS');
            INSERT INTO `cidades` VALUES ('3723', '15', 'Pedro Régis', 'PB');
            INSERT INTO `cidades` VALUES ('3724', '13', 'Pedro Teixeira', 'MG');
            INSERT INTO `cidades` VALUES ('3725', '20', 'Pedro Velho', 'RN');
            INSERT INTO `cidades` VALUES ('3726', '27', 'Peixe', 'TO');
            INSERT INTO `cidades` VALUES ('3727', '14', 'Peixe-Boi', 'PA');
            INSERT INTO `cidades` VALUES ('3728', '11', 'Peixoto de Azevedo', 'MT');
            INSERT INTO `cidades` VALUES ('3729', '21', 'Pejuçara', 'RS');
            INSERT INTO `cidades` VALUES ('3730', '21', 'Pelotas', 'RS');
            INSERT INTO `cidades` VALUES ('3731', '6', 'Penaforte', 'CE');
            INSERT INTO `cidades` VALUES ('3732', '10', 'Penalva', 'MA');
            INSERT INTO `cidades` VALUES ('3733', '25', 'Penápolis', 'SP');
            INSERT INTO `cidades` VALUES ('3734', '20', 'Pendências', 'RN');
            INSERT INTO `cidades` VALUES ('3735', '2', 'Penedo', 'AL');
            INSERT INTO `cidades` VALUES ('3736', '24', 'Penha', 'SC');
            INSERT INTO `cidades` VALUES ('3737', '6', 'Pentecoste', 'CE');
            INSERT INTO `cidades` VALUES ('3738', '13', 'Pequeri', 'MG');
            INSERT INTO `cidades` VALUES ('3739', '13', 'Pequi', 'MG');
            INSERT INTO `cidades` VALUES ('3740', '27', 'Pequizeiro', 'TO');
            INSERT INTO `cidades` VALUES ('3741', '13', 'Perdigão', 'MG');
            INSERT INTO `cidades` VALUES ('3742', '13', 'Perdizes', 'MG');
            INSERT INTO `cidades` VALUES ('3743', '13', 'Perdões', 'MG');
            INSERT INTO `cidades` VALUES ('3744', '25', 'Pereira Barreto', 'SP');
            INSERT INTO `cidades` VALUES ('3745', '25', 'Pereiras', 'SP');
            INSERT INTO `cidades` VALUES ('3746', '6', 'Pereiro', 'CE');
            INSERT INTO `cidades` VALUES ('3747', '10', 'Peri Mirim', 'MA');
            INSERT INTO `cidades` VALUES ('3748', '13', 'Periquito', 'MG');
            INSERT INTO `cidades` VALUES ('3749', '24', 'Peritiba', 'SC');
            INSERT INTO `cidades` VALUES ('3750', '10', 'Peritoró', 'MA');
            INSERT INTO `cidades` VALUES ('3751', '16', 'Perobal', 'PR');
            INSERT INTO `cidades` VALUES ('3752', '16', 'Pérola', 'PR');
            INSERT INTO `cidades` VALUES ('3753', '16', 'Pérola d\'Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('3754', '9', 'Perolândia', 'GO');
            INSERT INTO `cidades` VALUES ('3755', '25', 'Peruíbe', 'SP');
            INSERT INTO `cidades` VALUES ('3756', '13', 'Pescador', 'MG');
            INSERT INTO `cidades` VALUES ('3757', '17', 'Pesqueira', 'PE');
            INSERT INTO `cidades` VALUES ('3758', '17', 'Petrolândia', 'PE');
            INSERT INTO `cidades` VALUES ('3759', '24', 'Petrolândia', 'SC');
            INSERT INTO `cidades` VALUES ('3760', '17', 'Petrolina', 'PE');
            INSERT INTO `cidades` VALUES ('3761', '9', 'Petrolina de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3762', '19', 'Petrópolis', 'RJ');
            INSERT INTO `cidades` VALUES ('3763', '2', 'Piaçabuçu', 'AL');
            INSERT INTO `cidades` VALUES ('3764', '25', 'Piacatu', 'SP');
            INSERT INTO `cidades` VALUES ('3765', '15', 'Piancó', 'PB');
            INSERT INTO `cidades` VALUES ('3766', '5', 'Piatã', 'BA');
            INSERT INTO `cidades` VALUES ('3767', '13', 'Piau', 'MG');
            INSERT INTO `cidades` VALUES ('3768', '21', 'Picada Café', 'RS');
            INSERT INTO `cidades` VALUES ('3769', '14', 'Piçarra', 'PA');
            INSERT INTO `cidades` VALUES ('3770', '18', 'Picos', 'PI');
            INSERT INTO `cidades` VALUES ('3771', '15', 'Picuí', 'PB');
            INSERT INTO `cidades` VALUES ('3772', '25', 'Piedade', 'SP');
            INSERT INTO `cidades` VALUES ('3773', '13', 'Piedade de Caratinga', 'MG');
            INSERT INTO `cidades` VALUES ('3774', '13', 'Piedade de Ponte Nova', 'MG');
            INSERT INTO `cidades` VALUES ('3775', '13', 'Piedade do Rio Grande', 'MG');
            INSERT INTO `cidades` VALUES ('3776', '13', 'Piedade dos Gerais', 'MG');
            INSERT INTO `cidades` VALUES ('3777', '16', 'Piên', 'PR');
            INSERT INTO `cidades` VALUES ('3778', '5', 'Pilão Arcado', 'BA');
            INSERT INTO `cidades` VALUES ('3779', '2', 'Pilar', 'AL');
            INSERT INTO `cidades` VALUES ('3780', '15', 'Pilar', 'PB');
            INSERT INTO `cidades` VALUES ('3781', '9', 'Pilar de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('3782', '25', 'Pilar do Sul', 'SP');
            INSERT INTO `cidades` VALUES ('3783', '15', 'Pilões', 'PB');
            INSERT INTO `cidades` VALUES ('3784', '20', 'Pilões', 'RN');
            INSERT INTO `cidades` VALUES ('3785', '15', 'Pilõezinhos', 'PB');
            INSERT INTO `cidades` VALUES ('3786', '13', 'Pimenta', 'MG');
            INSERT INTO `cidades` VALUES ('3787', '22', 'Pimenta Bueno', 'RO');
            INSERT INTO `cidades` VALUES ('3788', '18', 'Pimenteiras', 'PI');
            INSERT INTO `cidades` VALUES ('3789', '22', 'Pimenteiras do Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('3790', '5', 'Pindaí', 'BA');
            INSERT INTO `cidades` VALUES ('3791', '25', 'Pindamonhangaba', 'SP');
            INSERT INTO `cidades` VALUES ('3792', '10', 'Pindaré-Mirim', 'MA');
            INSERT INTO `cidades` VALUES ('3793', '2', 'Pindoba', 'AL');
            INSERT INTO `cidades` VALUES ('3794', '5', 'Pindobaçu', 'BA');
            INSERT INTO `cidades` VALUES ('3795', '25', 'Pindorama', 'SP');
            INSERT INTO `cidades` VALUES ('3796', '27', 'Pindorama do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('3797', '6', 'Pindoretama', 'CE');
            INSERT INTO `cidades` VALUES ('3798', '13', 'Pingo-d\'Água', 'MG');
            INSERT INTO `cidades` VALUES ('3799', '16', 'Pinhais', 'PR');
            INSERT INTO `cidades` VALUES ('3800', '21', 'Pinhal', 'RS');
            INSERT INTO `cidades` VALUES ('3801', '21', 'Pinhal da Serra', 'RS');
            INSERT INTO `cidades` VALUES ('3802', '16', 'Pinhal de São Bento', 'PR');
            INSERT INTO `cidades` VALUES ('3803', '21', 'Pinhal Grande', 'RS');
            INSERT INTO `cidades` VALUES ('3804', '16', 'Pinhalão', 'PR');
            INSERT INTO `cidades` VALUES ('3805', '24', 'Pinhalzinho', 'SC');
            INSERT INTO `cidades` VALUES ('3806', '25', 'Pinhalzinho', 'SP');
            INSERT INTO `cidades` VALUES ('3807', '16', 'Pinhão', 'PR');
            INSERT INTO `cidades` VALUES ('3808', '26', 'Pinhão', 'SE');
            INSERT INTO `cidades` VALUES ('3809', '19', 'Pinheiral', 'RJ');
            INSERT INTO `cidades` VALUES ('3810', '21', 'Pinheirinho do Vale', 'RS');
            INSERT INTO `cidades` VALUES ('3811', '10', 'Pinheiro', 'MA');
            INSERT INTO `cidades` VALUES ('3812', '21', 'Pinheiro Machado', 'RS');
            INSERT INTO `cidades` VALUES ('3813', '24', 'Pinheiro Preto', 'SC');
            INSERT INTO `cidades` VALUES ('3814', '8', 'Pinheiros', 'ES');
            INSERT INTO `cidades` VALUES ('3815', '5', 'Pintadas', 'BA');
            INSERT INTO `cidades` VALUES ('3816', '13', 'Pintópolis', 'MG');
            INSERT INTO `cidades` VALUES ('3817', '18', 'Pio IX', 'PI');
            INSERT INTO `cidades` VALUES ('3818', '10', 'Pio XII', 'MA');
            INSERT INTO `cidades` VALUES ('3819', '25', 'Piquerobi', 'SP');
            INSERT INTO `cidades` VALUES ('3820', '6', 'Piquet Carneiro', 'CE');
            INSERT INTO `cidades` VALUES ('3821', '25', 'Piquete', 'SP');
            INSERT INTO `cidades` VALUES ('3822', '25', 'Piracaia', 'SP');
            INSERT INTO `cidades` VALUES ('3823', '9', 'Piracanjuba', 'GO');
            INSERT INTO `cidades` VALUES ('3824', '13', 'Piracema', 'MG');
            INSERT INTO `cidades` VALUES ('3825', '25', 'Piracicaba', 'SP');
            INSERT INTO `cidades` VALUES ('3826', '18', 'Piracuruca', 'PI');
            INSERT INTO `cidades` VALUES ('3827', '19', 'Piraí', 'RJ');
            INSERT INTO `cidades` VALUES ('3828', '5', 'Piraí do Norte', 'BA');
            INSERT INTO `cidades` VALUES ('3829', '16', 'Piraí do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('3830', '25', 'Piraju', 'SP');
            INSERT INTO `cidades` VALUES ('3831', '13', 'Pirajuba', 'MG');
            INSERT INTO `cidades` VALUES ('3832', '25', 'Pirajuí', 'SP');
            INSERT INTO `cidades` VALUES ('3833', '26', 'Pirambu', 'SE');
            INSERT INTO `cidades` VALUES ('3834', '13', 'Piranga', 'MG');
            INSERT INTO `cidades` VALUES ('3835', '25', 'Pirangi', 'SP');
            INSERT INTO `cidades` VALUES ('3836', '13', 'Piranguçu', 'MG');
            INSERT INTO `cidades` VALUES ('3837', '13', 'Piranguinho', 'MG');
            INSERT INTO `cidades` VALUES ('3838', '2', 'Piranhas', 'AL');
            INSERT INTO `cidades` VALUES ('3839', '9', 'Piranhas', 'GO');
            INSERT INTO `cidades` VALUES ('3840', '10', 'Pirapemas', 'MA');
            INSERT INTO `cidades` VALUES ('3841', '13', 'Pirapetinga', 'MG');
            INSERT INTO `cidades` VALUES ('3842', '21', 'Pirapó', 'RS');
            INSERT INTO `cidades` VALUES ('3843', '13', 'Pirapora', 'MG');
            INSERT INTO `cidades` VALUES ('3844', '25', 'Pirapora do Bom Jesus', 'SP');
            INSERT INTO `cidades` VALUES ('3845', '25', 'Pirapozinho', 'SP');
            INSERT INTO `cidades` VALUES ('3846', '16', 'Piraquara', 'PR');
            INSERT INTO `cidades` VALUES ('3847', '27', 'Piraquê', 'TO');
            INSERT INTO `cidades` VALUES ('3848', '25', 'Pirassununga', 'SP');
            INSERT INTO `cidades` VALUES ('3849', '21', 'Piratini', 'RS');
            INSERT INTO `cidades` VALUES ('3850', '25', 'Piratininga', 'SP');
            INSERT INTO `cidades` VALUES ('3851', '24', 'Piratuba', 'SC');
            INSERT INTO `cidades` VALUES ('3852', '13', 'Piraúba', 'MG');
            INSERT INTO `cidades` VALUES ('3853', '9', 'Pirenópolis', 'GO');
            INSERT INTO `cidades` VALUES ('3854', '9', 'Pires do Rio', 'GO');
            INSERT INTO `cidades` VALUES ('3855', '6', 'Pires Ferreira', 'CE');
            INSERT INTO `cidades` VALUES ('3856', '5', 'Piripá', 'BA');
            INSERT INTO `cidades` VALUES ('3857', '18', 'Piripiri', 'PI');
            INSERT INTO `cidades` VALUES ('3858', '5', 'Piritiba', 'BA');
            INSERT INTO `cidades` VALUES ('3859', '15', 'Pirpirituba', 'PB');
            INSERT INTO `cidades` VALUES ('3860', '16', 'Pitanga', 'PR');
            INSERT INTO `cidades` VALUES ('3861', '16', 'Pitangueiras', 'PR');
            INSERT INTO `cidades` VALUES ('3862', '25', 'Pitangueiras', 'SP');
            INSERT INTO `cidades` VALUES ('3863', '13', 'Pitangui', 'MG');
            INSERT INTO `cidades` VALUES ('3864', '15', 'Pitimbu', 'PB');
            INSERT INTO `cidades` VALUES ('3865', '27', 'Pium', 'TO');
            INSERT INTO `cidades` VALUES ('3866', '8', 'Piúma', 'ES');
            INSERT INTO `cidades` VALUES ('3867', '13', 'Piumhi', 'MG');
            INSERT INTO `cidades` VALUES ('3868', '14', 'Placas', 'PA');
            INSERT INTO `cidades` VALUES ('3869', '1', 'Plácido de Castro', 'AC');
            INSERT INTO `cidades` VALUES ('3870', '9', 'Planaltina', 'GO');
            INSERT INTO `cidades` VALUES ('3871', '16', 'Planaltina do Paraná', 'PR');
            INSERT INTO `cidades` VALUES ('3872', '5', 'Planaltino', 'BA');
            INSERT INTO `cidades` VALUES ('3873', '5', 'Planalto', 'BA');
            INSERT INTO `cidades` VALUES ('3874', '16', 'Planalto', 'PR');
            INSERT INTO `cidades` VALUES ('3875', '21', 'Planalto', 'RS');
            INSERT INTO `cidades` VALUES ('3876', '25', 'Planalto', 'SP');
            INSERT INTO `cidades` VALUES ('3877', '24', 'Planalto Alegre', 'SC');
            INSERT INTO `cidades` VALUES ('3878', '11', 'Planalto da Serra', 'MT');
            INSERT INTO `cidades` VALUES ('3879', '13', 'Planura', 'MG');
            INSERT INTO `cidades` VALUES ('3880', '25', 'Platina', 'SP');
            INSERT INTO `cidades` VALUES ('3881', '25', 'Poá', 'SP');
            INSERT INTO `cidades` VALUES ('3882', '17', 'Poção', 'PE');
            INSERT INTO `cidades` VALUES ('3883', '10', 'Poção de Pedras', 'MA');
            INSERT INTO `cidades` VALUES ('3884', '15', 'Pocinhos', 'PB');
            INSERT INTO `cidades` VALUES ('3885', '20', 'Poço Branco', 'RN');
            INSERT INTO `cidades` VALUES ('3886', '15', 'Poço Dantas', 'PB');
            INSERT INTO `cidades` VALUES ('3887', '21', 'Poço das Antas', 'RS');
            INSERT INTO `cidades` VALUES ('3888', '2', 'Poço das Trincheiras', 'AL');
            INSERT INTO `cidades` VALUES ('3889', '15', 'Poço de José de Moura', 'PB');
            INSERT INTO `cidades` VALUES ('3890', '13', 'Poço Fundo', 'MG');
            INSERT INTO `cidades` VALUES ('3891', '26', 'Poço Redondo', 'SE');
            INSERT INTO `cidades` VALUES ('3892', '26', 'Poço Verde', 'SE');
            INSERT INTO `cidades` VALUES ('3893', '5', 'Poções', 'BA');
            INSERT INTO `cidades` VALUES ('3894', '11', 'Poconé', 'MT');
            INSERT INTO `cidades` VALUES ('3895', '13', 'Poços de Caldas', 'MG');
            INSERT INTO `cidades` VALUES ('3896', '13', 'Pocrane', 'MG');
            INSERT INTO `cidades` VALUES ('3897', '5', 'Pojuca', 'BA');
            INSERT INTO `cidades` VALUES ('3898', '25', 'Poloni', 'SP');
            INSERT INTO `cidades` VALUES ('3899', '15', 'Pombal', 'PB');
            INSERT INTO `cidades` VALUES ('3900', '17', 'Pombos', 'PE');
            INSERT INTO `cidades` VALUES ('3901', '24', 'Pomerode', 'SC');
            INSERT INTO `cidades` VALUES ('3902', '25', 'Pompéia', 'SP');
            INSERT INTO `cidades` VALUES ('3903', '13', 'Pompéu', 'MG');
            INSERT INTO `cidades` VALUES ('3904', '25', 'Pongaí', 'SP');
            INSERT INTO `cidades` VALUES ('3905', '14', 'Ponta de Pedras', 'PA');
            INSERT INTO `cidades` VALUES ('3906', '16', 'Ponta Grossa', 'PR');
            INSERT INTO `cidades` VALUES ('3907', '12', 'Ponta Porã', 'MS');
            INSERT INTO `cidades` VALUES ('3908', '25', 'Pontal', 'SP');
            INSERT INTO `cidades` VALUES ('3909', '11', 'Pontal do Araguaia', 'MT');
            INSERT INTO `cidades` VALUES ('3910', '16', 'Pontal do Paraná', 'PR');
            INSERT INTO `cidades` VALUES ('3911', '9', 'Pontalina', 'GO');
            INSERT INTO `cidades` VALUES ('3912', '25', 'Pontalinda', 'SP');
            INSERT INTO `cidades` VALUES ('3913', '21', 'Pontão', 'RS');
            INSERT INTO `cidades` VALUES ('3914', '24', 'Ponte Alta', 'SC');
            INSERT INTO `cidades` VALUES ('3915', '27', 'Ponte Alta do Bom Jesus', 'TO');
            INSERT INTO `cidades` VALUES ('3916', '24', 'Ponte Alta do Norte', 'SC');
            INSERT INTO `cidades` VALUES ('3917', '27', 'Ponte Alta do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('3918', '11', 'Ponte Branca', 'MT');
            INSERT INTO `cidades` VALUES ('3919', '13', 'Ponte Nova', 'MG');
            INSERT INTO `cidades` VALUES ('3920', '21', 'Ponte Preta', 'RS');
            INSERT INTO `cidades` VALUES ('3921', '24', 'Ponte Serrada', 'SC');
            INSERT INTO `cidades` VALUES ('3922', '11', 'Pontes e Lacerda', 'MT');
            INSERT INTO `cidades` VALUES ('3923', '25', 'Pontes Gestal', 'SP');
            INSERT INTO `cidades` VALUES ('3924', '8', 'Ponto Belo', 'ES');
            INSERT INTO `cidades` VALUES ('3925', '13', 'Ponto Chique', 'MG');
            INSERT INTO `cidades` VALUES ('3926', '13', 'Ponto dos Volantes', 'MG');
            INSERT INTO `cidades` VALUES ('3927', '5', 'Ponto Novo', 'BA');
            INSERT INTO `cidades` VALUES ('3928', '25', 'Populina', 'SP');
            INSERT INTO `cidades` VALUES ('3929', '6', 'Poranga', 'CE');
            INSERT INTO `cidades` VALUES ('3930', '25', 'Porangaba', 'SP');
            INSERT INTO `cidades` VALUES ('3931', '9', 'Porangatu', 'GO');
            INSERT INTO `cidades` VALUES ('3932', '19', 'Porciúncula', 'RJ');
            INSERT INTO `cidades` VALUES ('3933', '16', 'Porecatu', 'PR');
            INSERT INTO `cidades` VALUES ('3934', '20', 'Portalegre', 'RN');
            INSERT INTO `cidades` VALUES ('3935', '21', 'Portão', 'RS');
            INSERT INTO `cidades` VALUES ('3936', '9', 'Porteirão', 'GO');
            INSERT INTO `cidades` VALUES ('3937', '6', 'Porteiras', 'CE');
            INSERT INTO `cidades` VALUES ('3938', '13', 'Porteirinha', 'MG');
            INSERT INTO `cidades` VALUES ('3939', '14', 'Portel', 'PA');
            INSERT INTO `cidades` VALUES ('3940', '9', 'Portelândia', 'GO');
            INSERT INTO `cidades` VALUES ('3941', '18', 'Porto', 'PI');
            INSERT INTO `cidades` VALUES ('3942', '1', 'Porto Acre', 'AC');
            INSERT INTO `cidades` VALUES ('3943', '21', 'Porto Alegre', 'RS');
            INSERT INTO `cidades` VALUES ('3944', '11', 'Porto Alegre do Norte', 'MT');
            INSERT INTO `cidades` VALUES ('3945', '18', 'Porto Alegre do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('3946', '27', 'Porto Alegre do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('3947', '16', 'Porto Amazonas', 'PR');
            INSERT INTO `cidades` VALUES ('3948', '16', 'Porto Barreiro', 'PR');
            INSERT INTO `cidades` VALUES ('3949', '24', 'Porto Belo', 'SC');
            INSERT INTO `cidades` VALUES ('3950', '2', 'Porto Calvo', 'AL');
            INSERT INTO `cidades` VALUES ('3951', '26', 'Porto da Folha', 'SE');
            INSERT INTO `cidades` VALUES ('3952', '14', 'Porto de Moz', 'PA');
            INSERT INTO `cidades` VALUES ('3953', '2', 'Porto de Pedras', 'AL');
            INSERT INTO `cidades` VALUES ('3954', '20', 'Porto do Mangue', 'RN');
            INSERT INTO `cidades` VALUES ('3955', '11', 'Porto dos Gaúchos', 'MT');
            INSERT INTO `cidades` VALUES ('3956', '11', 'Porto Esperidião', 'MT');
            INSERT INTO `cidades` VALUES ('3957', '11', 'Porto Estrela', 'MT');
            INSERT INTO `cidades` VALUES ('3958', '25', 'Porto Feliz', 'SP');
            INSERT INTO `cidades` VALUES ('3959', '25', 'Porto Ferreira', 'SP');
            INSERT INTO `cidades` VALUES ('3960', '13', 'Porto Firme', 'MG');
            INSERT INTO `cidades` VALUES ('3961', '10', 'Porto Franco', 'MA');
            INSERT INTO `cidades` VALUES ('3962', '3', 'Porto Grande', 'AP');
            INSERT INTO `cidades` VALUES ('3963', '21', 'Porto Lucena', 'RS');
            INSERT INTO `cidades` VALUES ('3964', '21', 'Porto Mauá', 'RS');
            INSERT INTO `cidades` VALUES ('3965', '12', 'Porto Murtinho', 'MS');
            INSERT INTO `cidades` VALUES ('3966', '27', 'Porto Nacional', 'TO');
            INSERT INTO `cidades` VALUES ('3967', '19', 'Porto Real', 'RJ');
            INSERT INTO `cidades` VALUES ('3968', '2', 'Porto Real do Colégio', 'AL');
            INSERT INTO `cidades` VALUES ('3969', '16', 'Porto Rico', 'PR');
            INSERT INTO `cidades` VALUES ('3970', '10', 'Porto Rico do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('3971', '5', 'Porto Seguro', 'BA');
            INSERT INTO `cidades` VALUES ('3972', '24', 'Porto União', 'SC');
            INSERT INTO `cidades` VALUES ('3973', '22', 'Porto Velho', 'RO');
            INSERT INTO `cidades` VALUES ('3974', '21', 'Porto Vera Cruz', 'RS');
            INSERT INTO `cidades` VALUES ('3975', '16', 'Porto Vitória', 'PR');
            INSERT INTO `cidades` VALUES ('3976', '1', 'Porto Walter', 'AC');
            INSERT INTO `cidades` VALUES ('3977', '21', 'Porto Xavier', 'RS');
            INSERT INTO `cidades` VALUES ('3978', '9', 'Posse', 'GO');
            INSERT INTO `cidades` VALUES ('3979', '13', 'Poté', 'MG');
            INSERT INTO `cidades` VALUES ('3980', '6', 'Potengi', 'CE');
            INSERT INTO `cidades` VALUES ('3981', '25', 'Potim', 'SP');
            INSERT INTO `cidades` VALUES ('3982', '5', 'Potiraguá', 'BA');
            INSERT INTO `cidades` VALUES ('3983', '25', 'Potirendaba', 'SP');
            INSERT INTO `cidades` VALUES ('3984', '6', 'Potiretama', 'CE');
            INSERT INTO `cidades` VALUES ('3985', '13', 'Pouso Alegre', 'MG');
            INSERT INTO `cidades` VALUES ('3986', '13', 'Pouso Alto', 'MG');
            INSERT INTO `cidades` VALUES ('3987', '21', 'Pouso Novo', 'RS');
            INSERT INTO `cidades` VALUES ('3988', '24', 'Pouso Redondo', 'SC');
            INSERT INTO `cidades` VALUES ('3989', '11', 'Poxoréo', 'MT');
            INSERT INTO `cidades` VALUES ('3990', '25', 'Pracinha', 'SP');
            INSERT INTO `cidades` VALUES ('3991', '3', 'Pracuúba', 'AP');
            INSERT INTO `cidades` VALUES ('3992', '5', 'Prado', 'BA');
            INSERT INTO `cidades` VALUES ('3993', '16', 'Prado Ferreira', 'PR');
            INSERT INTO `cidades` VALUES ('3994', '25', 'Pradópolis', 'SP');
            INSERT INTO `cidades` VALUES ('3995', '13', 'Prados', 'MG');
            INSERT INTO `cidades` VALUES ('3996', '24', 'Praia Grande', 'SC');
            INSERT INTO `cidades` VALUES ('3997', '25', 'Praia Grande', 'SP');
            INSERT INTO `cidades` VALUES ('3998', '27', 'Praia Norte', 'TO');
            INSERT INTO `cidades` VALUES ('3999', '14', 'Prainha', 'PA');
            INSERT INTO `cidades` VALUES ('4000', '16', 'Pranchita', 'PR');
            INSERT INTO `cidades` VALUES ('4001', '13', 'Prata', 'MG');
            INSERT INTO `cidades` VALUES ('4002', '15', 'Prata', 'PB');
            INSERT INTO `cidades` VALUES ('4003', '18', 'Prata do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4004', '25', 'Pratânia', 'SP');
            INSERT INTO `cidades` VALUES ('4005', '13', 'Pratápolis', 'MG');
            INSERT INTO `cidades` VALUES ('4006', '13', 'Pratinha', 'MG');
            INSERT INTO `cidades` VALUES ('4007', '25', 'Presidente Alves', 'SP');
            INSERT INTO `cidades` VALUES ('4008', '13', 'Presidente Bernardes', 'MG');
            INSERT INTO `cidades` VALUES ('4009', '25', 'Presidente Bernardes', 'SP');
            INSERT INTO `cidades` VALUES ('4010', '24', 'Presidente Castello Branco', 'SC');
            INSERT INTO `cidades` VALUES ('4011', '16', 'Presidente Castelo Branco', 'PR');
            INSERT INTO `cidades` VALUES ('4012', '5', 'Presidente Dutra', 'BA');
            INSERT INTO `cidades` VALUES ('4013', '10', 'Presidente Dutra', 'MA');
            INSERT INTO `cidades` VALUES ('4014', '25', 'Presidente Epitácio', 'SP');
            INSERT INTO `cidades` VALUES ('4015', '4', 'Presidente Figueiredo', 'AM');
            INSERT INTO `cidades` VALUES ('4016', '24', 'Presidente Getúlio', 'SC');
            INSERT INTO `cidades` VALUES ('4017', '5', 'Presidente Jânio Quadros', 'BA');
            INSERT INTO `cidades` VALUES ('4018', '10', 'Presidente Juscelino', 'MA');
            INSERT INTO `cidades` VALUES ('4019', '13', 'Presidente Juscelino', 'MG');
            INSERT INTO `cidades` VALUES ('4020', '20', 'Presidente Juscelino', 'RN');
            INSERT INTO `cidades` VALUES ('4021', '8', 'Presidente Kennedy', 'ES');
            INSERT INTO `cidades` VALUES ('4022', '27', 'Presidente Kennedy', 'TO');
            INSERT INTO `cidades` VALUES ('4023', '13', 'Presidente Kubitschek', 'MG');
            INSERT INTO `cidades` VALUES ('4024', '21', 'Presidente Lucena', 'RS');
            INSERT INTO `cidades` VALUES ('4025', '10', 'Presidente Médici', 'MA');
            INSERT INTO `cidades` VALUES ('4026', '22', 'Presidente Médici', 'RO');
            INSERT INTO `cidades` VALUES ('4027', '24', 'Presidente Nereu', 'SC');
            INSERT INTO `cidades` VALUES ('4028', '13', 'Presidente Olegário', 'MG');
            INSERT INTO `cidades` VALUES ('4029', '25', 'Presidente Prudente', 'SP');
            INSERT INTO `cidades` VALUES ('4030', '10', 'Presidente Sarney', 'MA');
            INSERT INTO `cidades` VALUES ('4031', '5', 'Presidente Tancredo Neves', 'BA');
            INSERT INTO `cidades` VALUES ('4032', '10', 'Presidente Vargas', 'MA');
            INSERT INTO `cidades` VALUES ('4033', '25', 'Presidente Venceslau', 'SP');
            INSERT INTO `cidades` VALUES ('4034', '14', 'Primavera', 'PA');
            INSERT INTO `cidades` VALUES ('4035', '17', 'Primavera', 'PE');
            INSERT INTO `cidades` VALUES ('4036', '22', 'Primavera de Rondônia', 'RO');
            INSERT INTO `cidades` VALUES ('4037', '11', 'Primavera do Leste', 'MT');
            INSERT INTO `cidades` VALUES ('4038', '10', 'Primeira Cruz', 'MA');
            INSERT INTO `cidades` VALUES ('4039', '16', 'Primeiro de Maio', 'PR');
            INSERT INTO `cidades` VALUES ('4040', '24', 'Princesa', 'SC');
            INSERT INTO `cidades` VALUES ('4041', '15', 'Princesa Isabel', 'PB');
            INSERT INTO `cidades` VALUES ('4042', '9', 'Professor Jamil', 'GO');
            INSERT INTO `cidades` VALUES ('4043', '21', 'Progresso', 'RS');
            INSERT INTO `cidades` VALUES ('4044', '25', 'Promissão', 'SP');
            INSERT INTO `cidades` VALUES ('4045', '26', 'Propriá', 'SE');
            INSERT INTO `cidades` VALUES ('4046', '21', 'Protásio Alves', 'RS');
            INSERT INTO `cidades` VALUES ('4047', '13', 'Prudente de Morais', 'MG');
            INSERT INTO `cidades` VALUES ('4048', '16', 'Prudentópolis', 'PR');
            INSERT INTO `cidades` VALUES ('4049', '27', 'Pugmil', 'TO');
            INSERT INTO `cidades` VALUES ('4050', '20', 'Pureza', 'RN');
            INSERT INTO `cidades` VALUES ('4051', '21', 'Putinga', 'RS');
            INSERT INTO `cidades` VALUES ('4052', '15', 'Puxinanã', 'PB');
            INSERT INTO `cidades` VALUES ('4053', '25', 'Quadra', 'SP');
            INSERT INTO `cidades` VALUES ('4054', '21', 'Quaraí', 'RS');
            INSERT INTO `cidades` VALUES ('4055', '13', 'Quartel Geral', 'MG');
            INSERT INTO `cidades` VALUES ('4056', '16', 'Quarto Centenário', 'PR');
            INSERT INTO `cidades` VALUES ('4057', '25', 'Quatá', 'SP');
            INSERT INTO `cidades` VALUES ('4058', '16', 'Quatiguá', 'PR');
            INSERT INTO `cidades` VALUES ('4059', '14', 'Quatipuru', 'PA');
            INSERT INTO `cidades` VALUES ('4060', '19', 'Quatis', 'RJ');
            INSERT INTO `cidades` VALUES ('4061', '16', 'Quatro Barras', 'PR');
            INSERT INTO `cidades` VALUES ('4062', '21', 'Quatro Irmãos', 'RS');
            INSERT INTO `cidades` VALUES ('4063', '16', 'Quatro Pontes', 'PR');
            INSERT INTO `cidades` VALUES ('4064', '2', 'Quebrangulo', 'AL');
            INSERT INTO `cidades` VALUES ('4065', '16', 'Quedas do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('4066', '18', 'Queimada Nova', 'PI');
            INSERT INTO `cidades` VALUES ('4067', '5', 'Queimadas', 'BA');
            INSERT INTO `cidades` VALUES ('4068', '15', 'Queimadas', 'PB');
            INSERT INTO `cidades` VALUES ('4069', '19', 'Queimados', 'RJ');
            INSERT INTO `cidades` VALUES ('4070', '25', 'Queiroz', 'SP');
            INSERT INTO `cidades` VALUES ('4071', '25', 'Queluz', 'SP');
            INSERT INTO `cidades` VALUES ('4072', '13', 'Queluzito', 'MG');
            INSERT INTO `cidades` VALUES ('4073', '11', 'Querência', 'MT');
            INSERT INTO `cidades` VALUES ('4074', '16', 'Querência do Norte', 'PR');
            INSERT INTO `cidades` VALUES ('4075', '21', 'Quevedos', 'RS');
            INSERT INTO `cidades` VALUES ('4076', '5', 'Quijingue', 'BA');
            INSERT INTO `cidades` VALUES ('4077', '24', 'Quilombo', 'SC');
            INSERT INTO `cidades` VALUES ('4078', '16', 'Quinta do Sol', 'PR');
            INSERT INTO `cidades` VALUES ('4079', '25', 'Quintana', 'SP');
            INSERT INTO `cidades` VALUES ('4080', '21', 'Quinze de Novembro', 'RS');
            INSERT INTO `cidades` VALUES ('4081', '17', 'Quipapá', 'PE');
            INSERT INTO `cidades` VALUES ('4082', '9', 'Quirinópolis', 'GO');
            INSERT INTO `cidades` VALUES ('4083', '19', 'Quissamã', 'RJ');
            INSERT INTO `cidades` VALUES ('4084', '16', 'Quitandinha', 'PR');
            INSERT INTO `cidades` VALUES ('4085', '6', 'Quiterianópolis', 'CE');
            INSERT INTO `cidades` VALUES ('4086', '17', 'Quixaba', 'PE');
            INSERT INTO `cidades` VALUES ('4087', '15', 'Quixabá', 'PB');
            INSERT INTO `cidades` VALUES ('4088', '5', 'Quixabeira', 'BA');
            INSERT INTO `cidades` VALUES ('4089', '6', 'Quixadá', 'CE');
            INSERT INTO `cidades` VALUES ('4090', '6', 'Quixelô', 'CE');
            INSERT INTO `cidades` VALUES ('4091', '6', 'Quixeramobim', 'CE');
            INSERT INTO `cidades` VALUES ('4092', '6', 'Quixeré', 'CE');
            INSERT INTO `cidades` VALUES ('4093', '20', 'Rafael Fernandes', 'RN');
            INSERT INTO `cidades` VALUES ('4094', '20', 'Rafael Godeiro', 'RN');
            INSERT INTO `cidades` VALUES ('4095', '5', 'Rafael Jambeiro', 'BA');
            INSERT INTO `cidades` VALUES ('4096', '25', 'Rafard', 'SP');
            INSERT INTO `cidades` VALUES ('4097', '16', 'Ramilândia', 'PR');
            INSERT INTO `cidades` VALUES ('4098', '25', 'Rancharia', 'SP');
            INSERT INTO `cidades` VALUES ('4099', '16', 'Rancho Alegre', 'PR');
            INSERT INTO `cidades` VALUES ('4100', '16', 'Rancho Alegre D\'Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('4101', '24', 'Rancho Queimado', 'SC');
            INSERT INTO `cidades` VALUES ('4102', '10', 'Raposa', 'MA');
            INSERT INTO `cidades` VALUES ('4103', '13', 'Raposos', 'MG');
            INSERT INTO `cidades` VALUES ('4104', '13', 'Raul Soares', 'MG');
            INSERT INTO `cidades` VALUES ('4105', '16', 'Realeza', 'PR');
            INSERT INTO `cidades` VALUES ('4106', '16', 'Rebouças', 'PR');
            INSERT INTO `cidades` VALUES ('4107', '17', 'Recife', 'PE');
            INSERT INTO `cidades` VALUES ('4108', '13', 'Recreio', 'MG');
            INSERT INTO `cidades` VALUES ('4109', '27', 'Recursolândia', 'TO');
            INSERT INTO `cidades` VALUES ('4110', '6', 'Redenção', 'CE');
            INSERT INTO `cidades` VALUES ('4111', '14', 'Redenção', 'PA');
            INSERT INTO `cidades` VALUES ('4112', '25', 'Redenção da Serra', 'SP');
            INSERT INTO `cidades` VALUES ('4113', '18', 'Redenção do Gurguéia', 'PI');
            INSERT INTO `cidades` VALUES ('4114', '21', 'Redentora', 'RS');
            INSERT INTO `cidades` VALUES ('4115', '13', 'Reduto', 'MG');
            INSERT INTO `cidades` VALUES ('4116', '18', 'Regeneração', 'PI');
            INSERT INTO `cidades` VALUES ('4117', '25', 'Regente Feijó', 'SP');
            INSERT INTO `cidades` VALUES ('4118', '25', 'Reginópolis', 'SP');
            INSERT INTO `cidades` VALUES ('4119', '25', 'Registro', 'SP');
            INSERT INTO `cidades` VALUES ('4120', '21', 'Relvado', 'RS');
            INSERT INTO `cidades` VALUES ('4121', '5', 'Remanso', 'BA');
            INSERT INTO `cidades` VALUES ('4122', '15', 'Remígio', 'PB');
            INSERT INTO `cidades` VALUES ('4123', '16', 'Renascença', 'PR');
            INSERT INTO `cidades` VALUES ('4124', '6', 'Reriutaba', 'CE');
            INSERT INTO `cidades` VALUES ('4125', '19', 'Resende', 'RJ');
            INSERT INTO `cidades` VALUES ('4126', '13', 'Resende Costa', 'MG');
            INSERT INTO `cidades` VALUES ('4127', '16', 'Reserva', 'PR');
            INSERT INTO `cidades` VALUES ('4128', '11', 'Reserva do Cabaçal', 'MT');
            INSERT INTO `cidades` VALUES ('4129', '16', 'Reserva do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('4130', '13', 'Resplendor', 'MG');
            INSERT INTO `cidades` VALUES ('4131', '13', 'Ressaquinha', 'MG');
            INSERT INTO `cidades` VALUES ('4132', '25', 'Restinga', 'SP');
            INSERT INTO `cidades` VALUES ('4133', '21', 'Restinga Seca', 'RS');
            INSERT INTO `cidades` VALUES ('4134', '5', 'Retirolândia', 'BA');
            INSERT INTO `cidades` VALUES ('4135', '10', 'Riachão', 'MA');
            INSERT INTO `cidades` VALUES ('4136', '15', 'Riachão', 'PB');
            INSERT INTO `cidades` VALUES ('4137', '5', 'Riachão das Neves', 'BA');
            INSERT INTO `cidades` VALUES ('4138', '15', 'Riachão do Bacamarte', 'PB');
            INSERT INTO `cidades` VALUES ('4139', '26', 'Riachão do Dantas', 'SE');
            INSERT INTO `cidades` VALUES ('4140', '5', 'Riachão do Jacuípe', 'BA');
            INSERT INTO `cidades` VALUES ('4141', '15', 'Riachão do Poço', 'PB');
            INSERT INTO `cidades` VALUES ('4142', '13', 'Riachinho', 'MG');
            INSERT INTO `cidades` VALUES ('4143', '27', 'Riachinho', 'TO');
            INSERT INTO `cidades` VALUES ('4144', '20', 'Riacho da Cruz', 'RN');
            INSERT INTO `cidades` VALUES ('4145', '17', 'Riacho das Almas', 'PE');
            INSERT INTO `cidades` VALUES ('4146', '5', 'Riacho de Santana', 'BA');
            INSERT INTO `cidades` VALUES ('4147', '20', 'Riacho de Santana', 'RN');
            INSERT INTO `cidades` VALUES ('4148', '15', 'Riacho de Santo Antônio', 'PB');
            INSERT INTO `cidades` VALUES ('4149', '15', 'Riacho dos Cavalos', 'PB');
            INSERT INTO `cidades` VALUES ('4150', '13', 'Riacho dos Machados', 'MG');
            INSERT INTO `cidades` VALUES ('4151', '18', 'Riacho Frio', 'PI');
            INSERT INTO `cidades` VALUES ('4152', '20', 'Riachuelo', 'RN');
            INSERT INTO `cidades` VALUES ('4153', '26', 'Riachuelo', 'SE');
            INSERT INTO `cidades` VALUES ('4154', '9', 'Rialma', 'GO');
            INSERT INTO `cidades` VALUES ('4155', '9', 'Rianápolis', 'GO');
            INSERT INTO `cidades` VALUES ('4156', '10', 'Ribamar Fiquene', 'MA');
            INSERT INTO `cidades` VALUES ('4157', '12', 'Ribas do Rio Pardo', 'MS');
            INSERT INTO `cidades` VALUES ('4158', '25', 'Ribeira', 'SP');
            INSERT INTO `cidades` VALUES ('4159', '5', 'Ribeira do Amparo', 'BA');
            INSERT INTO `cidades` VALUES ('4160', '18', 'Ribeira do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4161', '5', 'Ribeira do Pombal', 'BA');
            INSERT INTO `cidades` VALUES ('4162', '17', 'Ribeirão', 'PE');
            INSERT INTO `cidades` VALUES ('4163', '25', 'Ribeirão Bonito', 'SP');
            INSERT INTO `cidades` VALUES ('4164', '25', 'Ribeirão Branco', 'SP');
            INSERT INTO `cidades` VALUES ('4165', '11', 'Ribeirão Cascalheira', 'MT');
            INSERT INTO `cidades` VALUES ('4166', '16', 'Ribeirão Claro', 'PR');
            INSERT INTO `cidades` VALUES ('4167', '25', 'Ribeirão Corrente', 'SP');
            INSERT INTO `cidades` VALUES ('4168', '13', 'Ribeirão das Neves', 'MG');
            INSERT INTO `cidades` VALUES ('4169', '5', 'Ribeirão do Largo', 'BA');
            INSERT INTO `cidades` VALUES ('4170', '16', 'Ribeirão do Pinhal', 'PR');
            INSERT INTO `cidades` VALUES ('4171', '25', 'Ribeirão do Sul', 'SP');
            INSERT INTO `cidades` VALUES ('4172', '25', 'Ribeirão dos Índios', 'SP');
            INSERT INTO `cidades` VALUES ('4173', '25', 'Ribeirão Grande', 'SP');
            INSERT INTO `cidades` VALUES ('4174', '25', 'Ribeirão Pires', 'SP');
            INSERT INTO `cidades` VALUES ('4175', '25', 'Ribeirão Preto', 'SP');
            INSERT INTO `cidades` VALUES ('4176', '13', 'Ribeirão Vermelho', 'MG');
            INSERT INTO `cidades` VALUES ('4177', '11', 'Ribeirãozinho', 'MT');
            INSERT INTO `cidades` VALUES ('4178', '18', 'Ribeiro Gonçalves', 'PI');
            INSERT INTO `cidades` VALUES ('4179', '26', 'Ribeirópolis', 'SE');
            INSERT INTO `cidades` VALUES ('4180', '25', 'Rifaina', 'SP');
            INSERT INTO `cidades` VALUES ('4181', '25', 'Rincão', 'SP');
            INSERT INTO `cidades` VALUES ('4182', '25', 'Rinópolis', 'SP');
            INSERT INTO `cidades` VALUES ('4183', '13', 'Rio Acima', 'MG');
            INSERT INTO `cidades` VALUES ('4184', '16', 'Rio Azul', 'PR');
            INSERT INTO `cidades` VALUES ('4185', '8', 'Rio Bananal', 'ES');
            INSERT INTO `cidades` VALUES ('4186', '16', 'Rio Bom', 'PR');
            INSERT INTO `cidades` VALUES ('4187', '19', 'Rio Bonito', 'RJ');
            INSERT INTO `cidades` VALUES ('4188', '16', 'Rio Bonito do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('4189', '1', 'Rio Branco', 'AC');
            INSERT INTO `cidades` VALUES ('4190', '11', 'Rio Branco', 'MT');
            INSERT INTO `cidades` VALUES ('4191', '16', 'Rio Branco do Ivaí', 'PR');
            INSERT INTO `cidades` VALUES ('4192', '16', 'Rio Branco do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('4193', '12', 'Rio Brilhante', 'MS');
            INSERT INTO `cidades` VALUES ('4194', '13', 'Rio Casca', 'MG');
            INSERT INTO `cidades` VALUES ('4195', '19', 'Rio Claro', 'RJ');
            INSERT INTO `cidades` VALUES ('4196', '25', 'Rio Claro', 'SP');
            INSERT INTO `cidades` VALUES ('4197', '22', 'Rio Crespo', 'RO');
            INSERT INTO `cidades` VALUES ('4198', '27', 'Rio da Conceição', 'TO');
            INSERT INTO `cidades` VALUES ('4199', '24', 'Rio das Antas', 'SC');
            INSERT INTO `cidades` VALUES ('4200', '19', 'Rio das Flores', 'RJ');
            INSERT INTO `cidades` VALUES ('4201', '19', 'Rio das Ostras', 'RJ');
            INSERT INTO `cidades` VALUES ('4202', '25', 'Rio das Pedras', 'SP');
            INSERT INTO `cidades` VALUES ('4203', '5', 'Rio de Contas', 'BA');
            INSERT INTO `cidades` VALUES ('4204', '19', 'Rio de Janeiro', 'RJ');
            INSERT INTO `cidades` VALUES ('4205', '5', 'Rio do Antônio', 'BA');
            INSERT INTO `cidades` VALUES ('4206', '24', 'Rio do Campo', 'SC');
            INSERT INTO `cidades` VALUES ('4207', '20', 'Rio do Fogo', 'RN');
            INSERT INTO `cidades` VALUES ('4208', '24', 'Rio do Oeste', 'SC');
            INSERT INTO `cidades` VALUES ('4209', '5', 'Rio do Pires', 'BA');
            INSERT INTO `cidades` VALUES ('4210', '13', 'Rio do Prado', 'MG');
            INSERT INTO `cidades` VALUES ('4211', '24', 'Rio do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('4212', '13', 'Rio Doce', 'MG');
            INSERT INTO `cidades` VALUES ('4213', '27', 'Rio dos Bois', 'TO');
            INSERT INTO `cidades` VALUES ('4214', '24', 'Rio dos Cedros', 'SC');
            INSERT INTO `cidades` VALUES ('4215', '21', 'Rio dos Índios', 'RS');
            INSERT INTO `cidades` VALUES ('4216', '13', 'Rio Espera', 'MG');
            INSERT INTO `cidades` VALUES ('4217', '17', 'Rio Formoso', 'PE');
            INSERT INTO `cidades` VALUES ('4218', '24', 'Rio Fortuna', 'SC');
            INSERT INTO `cidades` VALUES ('4219', '21', 'Rio Grande', 'RS');
            INSERT INTO `cidades` VALUES ('4220', '25', 'Rio Grande da Serra', 'SP');
            INSERT INTO `cidades` VALUES ('4221', '18', 'Rio Grande do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4222', '2', 'Rio Largo', 'AL');
            INSERT INTO `cidades` VALUES ('4223', '13', 'Rio Manso', 'MG');
            INSERT INTO `cidades` VALUES ('4224', '14', 'Rio Maria', 'PA');
            INSERT INTO `cidades` VALUES ('4225', '24', 'Rio Negrinho', 'SC');
            INSERT INTO `cidades` VALUES ('4226', '12', 'Rio Negro', 'MS');
            INSERT INTO `cidades` VALUES ('4227', '16', 'Rio Negro', 'PR');
            INSERT INTO `cidades` VALUES ('4228', '13', 'Rio Novo', 'MG');
            INSERT INTO `cidades` VALUES ('4229', '8', 'Rio Novo do Sul', 'ES');
            INSERT INTO `cidades` VALUES ('4230', '13', 'Rio Paranaíba', 'MG');
            INSERT INTO `cidades` VALUES ('4231', '21', 'Rio Pardo', 'RS');
            INSERT INTO `cidades` VALUES ('4232', '13', 'Rio Pardo de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4233', '13', 'Rio Piracicaba', 'MG');
            INSERT INTO `cidades` VALUES ('4234', '13', 'Rio Pomba', 'MG');
            INSERT INTO `cidades` VALUES ('4235', '13', 'Rio Preto', 'MG');
            INSERT INTO `cidades` VALUES ('4236', '4', 'Rio Preto da Eva', 'AM');
            INSERT INTO `cidades` VALUES ('4237', '9', 'Rio Quente', 'GO');
            INSERT INTO `cidades` VALUES ('4238', '5', 'Rio Real', 'BA');
            INSERT INTO `cidades` VALUES ('4239', '24', 'Rio Rufino', 'SC');
            INSERT INTO `cidades` VALUES ('4240', '27', 'Rio Sono', 'TO');
            INSERT INTO `cidades` VALUES ('4241', '15', 'Rio Tinto', 'PB');
            INSERT INTO `cidades` VALUES ('4242', '9', 'Rio Verde', 'GO');
            INSERT INTO `cidades` VALUES ('4243', '12', 'Rio Verde de Mato Grosso', 'MS');
            INSERT INTO `cidades` VALUES ('4244', '13', 'Rio Vermelho', 'MG');
            INSERT INTO `cidades` VALUES ('4245', '25', 'Riolândia', 'SP');
            INSERT INTO `cidades` VALUES ('4246', '21', 'Riozinho', 'RS');
            INSERT INTO `cidades` VALUES ('4247', '24', 'Riqueza', 'SC');
            INSERT INTO `cidades` VALUES ('4248', '13', 'Ritápolis', 'MG');
            INSERT INTO `cidades` VALUES ('4249', '25', 'Riversul', 'SP');
            INSERT INTO `cidades` VALUES ('4250', '21', 'Roca Sales', 'RS');
            INSERT INTO `cidades` VALUES ('4251', '12', 'Rochedo', 'MS');
            INSERT INTO `cidades` VALUES ('4252', '13', 'Rochedo de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4253', '24', 'Rodeio', 'SC');
            INSERT INTO `cidades` VALUES ('4254', '21', 'Rodeio Bonito', 'RS');
            INSERT INTO `cidades` VALUES ('4255', '13', 'Rodeiro', 'MG');
            INSERT INTO `cidades` VALUES ('4256', '5', 'Rodelas', 'BA');
            INSERT INTO `cidades` VALUES ('4257', '20', 'Rodolfo Fernandes', 'RN');
            INSERT INTO `cidades` VALUES ('4258', '1', 'Rodrigues Alves', 'AC');
            INSERT INTO `cidades` VALUES ('4259', '21', 'Rolador', 'RS');
            INSERT INTO `cidades` VALUES ('4260', '16', 'Rolândia', 'PR');
            INSERT INTO `cidades` VALUES ('4261', '21', 'Rolante', 'RS');
            INSERT INTO `cidades` VALUES ('4262', '22', 'Rolim de Moura', 'RO');
            INSERT INTO `cidades` VALUES ('4263', '13', 'Romaria', 'MG');
            INSERT INTO `cidades` VALUES ('4264', '24', 'Romelândia', 'SC');
            INSERT INTO `cidades` VALUES ('4265', '16', 'Roncador', 'PR');
            INSERT INTO `cidades` VALUES ('4266', '21', 'Ronda Alta', 'RS');
            INSERT INTO `cidades` VALUES ('4267', '21', 'Rondinha', 'RS');
            INSERT INTO `cidades` VALUES ('4268', '11', 'Rondolândia', 'MT');
            INSERT INTO `cidades` VALUES ('4269', '16', 'Rondon', 'PR');
            INSERT INTO `cidades` VALUES ('4270', '14', 'Rondon do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('4271', '11', 'Rondonópolis', 'MT');
            INSERT INTO `cidades` VALUES ('4272', '21', 'Roque Gonzales', 'RS');
            INSERT INTO `cidades` VALUES ('4273', '23', 'Rorainópolis', 'RR');
            INSERT INTO `cidades` VALUES ('4274', '25', 'Rosana', 'SP');
            INSERT INTO `cidades` VALUES ('4275', '10', 'Rosário', 'MA');
            INSERT INTO `cidades` VALUES ('4276', '13', 'Rosário da Limeira', 'MG');
            INSERT INTO `cidades` VALUES ('4277', '26', 'Rosário do Catete', 'SE');
            INSERT INTO `cidades` VALUES ('4278', '16', 'Rosário do Ivaí', 'PR');
            INSERT INTO `cidades` VALUES ('4279', '21', 'Rosário do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4280', '11', 'Rosário Oeste', 'MT');
            INSERT INTO `cidades` VALUES ('4281', '25', 'Roseira', 'SP');
            INSERT INTO `cidades` VALUES ('4282', '2', 'Roteiro', 'AL');
            INSERT INTO `cidades` VALUES ('4283', '13', 'Rubelita', 'MG');
            INSERT INTO `cidades` VALUES ('4284', '25', 'Rubiácea', 'SP');
            INSERT INTO `cidades` VALUES ('4285', '9', 'Rubiataba', 'GO');
            INSERT INTO `cidades` VALUES ('4286', '13', 'Rubim', 'MG');
            INSERT INTO `cidades` VALUES ('4287', '25', 'Rubinéia', 'SP');
            INSERT INTO `cidades` VALUES ('4288', '14', 'Rurópolis', 'PA');
            INSERT INTO `cidades` VALUES ('4289', '6', 'Russas', 'CE');
            INSERT INTO `cidades` VALUES ('4290', '5', 'Ruy Barbosa', 'BA');
            INSERT INTO `cidades` VALUES ('4291', '20', 'Ruy Barbosa', 'RN');
            INSERT INTO `cidades` VALUES ('4292', '13', 'Sabará', 'MG');
            INSERT INTO `cidades` VALUES ('4293', '16', 'Sabáudia', 'PR');
            INSERT INTO `cidades` VALUES ('4294', '25', 'Sabino', 'SP');
            INSERT INTO `cidades` VALUES ('4295', '13', 'Sabinópolis', 'MG');
            INSERT INTO `cidades` VALUES ('4296', '6', 'Saboeiro', 'CE');
            INSERT INTO `cidades` VALUES ('4297', '13', 'Sacramento', 'MG');
            INSERT INTO `cidades` VALUES ('4298', '21', 'Sagrada Família', 'RS');
            INSERT INTO `cidades` VALUES ('4299', '25', 'Sagres', 'SP');
            INSERT INTO `cidades` VALUES ('4300', '17', 'Sairé', 'PE');
            INSERT INTO `cidades` VALUES ('4301', '21', 'Saldanha Marinho', 'RS');
            INSERT INTO `cidades` VALUES ('4302', '25', 'Sales', 'SP');
            INSERT INTO `cidades` VALUES ('4303', '25', 'Sales Oliveira', 'SP');
            INSERT INTO `cidades` VALUES ('4304', '25', 'Salesópolis', 'SP');
            INSERT INTO `cidades` VALUES ('4305', '24', 'Salete', 'SC');
            INSERT INTO `cidades` VALUES ('4306', '15', 'Salgadinho', 'PB');
            INSERT INTO `cidades` VALUES ('4307', '17', 'Salgadinho', 'PE');
            INSERT INTO `cidades` VALUES ('4308', '26', 'Salgado', 'SE');
            INSERT INTO `cidades` VALUES ('4309', '15', 'Salgado de São Félix', 'PB');
            INSERT INTO `cidades` VALUES ('4310', '16', 'Salgado Filho', 'PR');
            INSERT INTO `cidades` VALUES ('4311', '17', 'Salgueiro', 'PE');
            INSERT INTO `cidades` VALUES ('4312', '13', 'Salinas', 'MG');
            INSERT INTO `cidades` VALUES ('4313', '5', 'Salinas da Margarida', 'BA');
            INSERT INTO `cidades` VALUES ('4314', '14', 'Salinópolis', 'PA');
            INSERT INTO `cidades` VALUES ('4315', '6', 'Salitre', 'CE');
            INSERT INTO `cidades` VALUES ('4316', '25', 'Salmourão', 'SP');
            INSERT INTO `cidades` VALUES ('4317', '17', 'Saloá', 'PE');
            INSERT INTO `cidades` VALUES ('4318', '24', 'Saltinho', 'SC');
            INSERT INTO `cidades` VALUES ('4319', '25', 'Saltinho', 'SP');
            INSERT INTO `cidades` VALUES ('4320', '25', 'Salto', 'SP');
            INSERT INTO `cidades` VALUES ('4321', '13', 'Salto da Divisa', 'MG');
            INSERT INTO `cidades` VALUES ('4322', '25', 'Salto de Pirapora', 'SP');
            INSERT INTO `cidades` VALUES ('4323', '11', 'Salto do Céu', 'MT');
            INSERT INTO `cidades` VALUES ('4324', '16', 'Salto do Itararé', 'PR');
            INSERT INTO `cidades` VALUES ('4325', '21', 'Salto do Jacuí', 'RS');
            INSERT INTO `cidades` VALUES ('4326', '16', 'Salto do Lontra', 'PR');
            INSERT INTO `cidades` VALUES ('4327', '25', 'Salto Grande', 'SP');
            INSERT INTO `cidades` VALUES ('4328', '24', 'Salto Veloso', 'SC');
            INSERT INTO `cidades` VALUES ('4329', '5', 'Salvador', 'BA');
            INSERT INTO `cidades` VALUES ('4330', '21', 'Salvador das Missões', 'RS');
            INSERT INTO `cidades` VALUES ('4331', '21', 'Salvador do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4332', '14', 'Salvaterra', 'PA');
            INSERT INTO `cidades` VALUES ('4333', '10', 'Sambaíba', 'MA');
            INSERT INTO `cidades` VALUES ('4334', '27', 'Sampaio', 'TO');
            INSERT INTO `cidades` VALUES ('4335', '21', 'Sananduva', 'RS');
            INSERT INTO `cidades` VALUES ('4336', '9', 'Sanclerlândia', 'GO');
            INSERT INTO `cidades` VALUES ('4337', '27', 'Sandolândia', 'TO');
            INSERT INTO `cidades` VALUES ('4338', '25', 'Sandovalina', 'SP');
            INSERT INTO `cidades` VALUES ('4339', '24', 'Sangão', 'SC');
            INSERT INTO `cidades` VALUES ('4340', '17', 'Sanharó', 'PE');
            INSERT INTO `cidades` VALUES ('4341', '25', 'Santa Adélia', 'SP');
            INSERT INTO `cidades` VALUES ('4342', '25', 'Santa Albertina', 'SP');
            INSERT INTO `cidades` VALUES ('4343', '16', 'Santa Amélia', 'PR');
            INSERT INTO `cidades` VALUES ('4344', '5', 'Santa Bárbara', 'BA');
            INSERT INTO `cidades` VALUES ('4345', '13', 'Santa Bárbara', 'MG');
            INSERT INTO `cidades` VALUES ('4346', '9', 'Santa Bárbara de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('4347', '13', 'Santa Bárbara do Leste', 'MG');
            INSERT INTO `cidades` VALUES ('4348', '13', 'Santa Bárbara do Monte Verde', 'MG');
            INSERT INTO `cidades` VALUES ('4349', '14', 'Santa Bárbara do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('4350', '21', 'Santa Bárbara do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4351', '13', 'Santa Bárbara do Tugúrio', 'MG');
            INSERT INTO `cidades` VALUES ('4352', '25', 'Santa Bárbara d\'Oeste', 'SP');
            INSERT INTO `cidades` VALUES ('4353', '25', 'Santa Branca', 'SP');
            INSERT INTO `cidades` VALUES ('4354', '5', 'Santa Brígida', 'BA');
            INSERT INTO `cidades` VALUES ('4355', '11', 'Santa Carmem', 'MT');
            INSERT INTO `cidades` VALUES ('4356', '15', 'Santa Cecília', 'PB');
            INSERT INTO `cidades` VALUES ('4357', '24', 'Santa Cecília', 'SC');
            INSERT INTO `cidades` VALUES ('4358', '16', 'Santa Cecília do Pavão', 'PR');
            INSERT INTO `cidades` VALUES ('4359', '21', 'Santa Cecília do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4360', '21', 'Santa Clara do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4361', '25', 'Santa Clara d\'Oeste', 'SP');
            INSERT INTO `cidades` VALUES ('4362', '15', 'Santa Cruz', 'PB');
            INSERT INTO `cidades` VALUES ('4363', '17', 'Santa Cruz', 'PE');
            INSERT INTO `cidades` VALUES ('4364', '20', 'Santa Cruz', 'RN');
            INSERT INTO `cidades` VALUES ('4365', '5', 'Santa Cruz Cabrália', 'BA');
            INSERT INTO `cidades` VALUES ('4366', '17', 'Santa Cruz da Baixa Verde', 'PE');
            INSERT INTO `cidades` VALUES ('4367', '25', 'Santa Cruz da Conceição', 'SP');
            INSERT INTO `cidades` VALUES ('4368', '25', 'Santa Cruz da Esperança', 'SP');
            INSERT INTO `cidades` VALUES ('4369', '5', 'Santa Cruz da Vitória', 'BA');
            INSERT INTO `cidades` VALUES ('4370', '25', 'Santa Cruz das Palmeiras', 'SP');
            INSERT INTO `cidades` VALUES ('4371', '9', 'Santa Cruz de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('4372', '13', 'Santa Cruz de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4373', '16', 'Santa Cruz de Monte Castelo', 'PR');
            INSERT INTO `cidades` VALUES ('4374', '13', 'Santa Cruz de Salinas', 'MG');
            INSERT INTO `cidades` VALUES ('4375', '14', 'Santa Cruz do Arari', 'PA');
            INSERT INTO `cidades` VALUES ('4376', '17', 'Santa Cruz do Capibaribe', 'PE');
            INSERT INTO `cidades` VALUES ('4377', '13', 'Santa Cruz do Escalvado', 'MG');
            INSERT INTO `cidades` VALUES ('4378', '18', 'Santa Cruz do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4379', '25', 'Santa Cruz do Rio Pardo', 'SP');
            INSERT INTO `cidades` VALUES ('4380', '21', 'Santa Cruz do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4381', '11', 'Santa Cruz do Xingu', 'MT');
            INSERT INTO `cidades` VALUES ('4382', '18', 'Santa Cruz dos Milagres', 'PI');
            INSERT INTO `cidades` VALUES ('4383', '13', 'Santa Efigênia de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4384', '25', 'Santa Ernestina', 'SP');
            INSERT INTO `cidades` VALUES ('4385', '16', 'Santa Fé', 'PR');
            INSERT INTO `cidades` VALUES ('4386', '9', 'Santa Fé de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('4387', '13', 'Santa Fé de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4388', '27', 'Santa Fé do Araguaia', 'TO');
            INSERT INTO `cidades` VALUES ('4389', '25', 'Santa Fé do Sul', 'SP');
            INSERT INTO `cidades` VALUES ('4390', '17', 'Santa Filomena', 'PE');
            INSERT INTO `cidades` VALUES ('4391', '18', 'Santa Filomena', 'PI');
            INSERT INTO `cidades` VALUES ('4392', '10', 'Santa Filomena do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('4393', '25', 'Santa Gertrudes', 'SP');
            INSERT INTO `cidades` VALUES ('4394', '10', 'Santa Helena', 'MA');
            INSERT INTO `cidades` VALUES ('4395', '15', 'Santa Helena', 'PB');
            INSERT INTO `cidades` VALUES ('4396', '16', 'Santa Helena', 'PR');
            INSERT INTO `cidades` VALUES ('4397', '24', 'Santa Helena', 'SC');
            INSERT INTO `cidades` VALUES ('4398', '9', 'Santa Helena de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('4399', '13', 'Santa Helena de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4400', '5', 'Santa Inês', 'BA');
            INSERT INTO `cidades` VALUES ('4401', '10', 'Santa Inês', 'MA');
            INSERT INTO `cidades` VALUES ('4402', '15', 'Santa Inês', 'PB');
            INSERT INTO `cidades` VALUES ('4403', '16', 'Santa Inês', 'PR');
            INSERT INTO `cidades` VALUES ('4404', '9', 'Santa Isabel', 'GO');
            INSERT INTO `cidades` VALUES ('4405', '25', 'Santa Isabel', 'SP');
            INSERT INTO `cidades` VALUES ('4406', '16', 'Santa Isabel do Ivaí', 'PR');
            INSERT INTO `cidades` VALUES ('4407', '14', 'Santa Isabel do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('4408', '4', 'Santa Isabel do Rio Negro', 'AM');
            INSERT INTO `cidades` VALUES ('4409', '16', 'Santa Izabel do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('4410', '13', 'Santa Juliana', 'MG');
            INSERT INTO `cidades` VALUES ('4411', '8', 'Santa Leopoldina', 'ES');
            INSERT INTO `cidades` VALUES ('4412', '16', 'Santa Lúcia', 'PR');
            INSERT INTO `cidades` VALUES ('4413', '25', 'Santa Lúcia', 'SP');
            INSERT INTO `cidades` VALUES ('4414', '18', 'Santa Luz', 'PI');
            INSERT INTO `cidades` VALUES ('4415', '5', 'Santa Luzia', 'BA');
            INSERT INTO `cidades` VALUES ('4416', '10', 'Santa Luzia', 'MA');
            INSERT INTO `cidades` VALUES ('4417', '13', 'Santa Luzia', 'MG');
            INSERT INTO `cidades` VALUES ('4418', '15', 'Santa Luzia', 'PB');
            INSERT INTO `cidades` VALUES ('4419', '26', 'Santa Luzia do Itanhy', 'SE');
            INSERT INTO `cidades` VALUES ('4420', '2', 'Santa Luzia do Norte', 'AL');
            INSERT INTO `cidades` VALUES ('4421', '14', 'Santa Luzia do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('4422', '10', 'Santa Luzia do Paruá', 'MA');
            INSERT INTO `cidades` VALUES ('4423', '22', 'Santa Luzia D\'Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('4424', '13', 'Santa Margarida', 'MG');
            INSERT INTO `cidades` VALUES ('4425', '21', 'Santa Margarida do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4426', '20', 'Santa Maria', 'RN');
            INSERT INTO `cidades` VALUES ('4427', '21', 'Santa Maria', 'RS');
            INSERT INTO `cidades` VALUES ('4428', '17', 'Santa Maria da Boa Vista', 'PE');
            INSERT INTO `cidades` VALUES ('4429', '25', 'Santa Maria da Serra', 'SP');
            INSERT INTO `cidades` VALUES ('4430', '5', 'Santa Maria da Vitória', 'BA');
            INSERT INTO `cidades` VALUES ('4431', '14', 'Santa Maria das Barreiras', 'PA');
            INSERT INTO `cidades` VALUES ('4432', '13', 'Santa Maria de Itabira', 'MG');
            INSERT INTO `cidades` VALUES ('4433', '8', 'Santa Maria de Jetibá', 'ES');
            INSERT INTO `cidades` VALUES ('4434', '17', 'Santa Maria do Cambucá', 'PE');
            INSERT INTO `cidades` VALUES ('4435', '21', 'Santa Maria do Herval', 'RS');
            INSERT INTO `cidades` VALUES ('4436', '16', 'Santa Maria do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('4437', '14', 'Santa Maria do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('4438', '13', 'Santa Maria do Salto', 'MG');
            INSERT INTO `cidades` VALUES ('4439', '13', 'Santa Maria do Suaçuí', 'MG');
            INSERT INTO `cidades` VALUES ('4440', '27', 'Santa Maria do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4441', '19', 'Santa Maria Madalena', 'RJ');
            INSERT INTO `cidades` VALUES ('4442', '16', 'Santa Mariana', 'PR');
            INSERT INTO `cidades` VALUES ('4443', '25', 'Santa Mercedes', 'SP');
            INSERT INTO `cidades` VALUES ('4444', '16', 'Santa Mônica', 'PR');
            INSERT INTO `cidades` VALUES ('4445', '6', 'Santa Quitéria', 'CE');
            INSERT INTO `cidades` VALUES ('4446', '10', 'Santa Quitéria do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('4447', '10', 'Santa Rita', 'MA');
            INSERT INTO `cidades` VALUES ('4448', '15', 'Santa Rita', 'PB');
            INSERT INTO `cidades` VALUES ('4449', '13', 'Santa Rita de Caldas', 'MG');
            INSERT INTO `cidades` VALUES ('4450', '5', 'Santa Rita de Cássia', 'BA');
            INSERT INTO `cidades` VALUES ('4451', '13', 'Santa Rita de Ibitipoca', 'MG');
            INSERT INTO `cidades` VALUES ('4452', '13', 'Santa Rita de Jacutinga', 'MG');
            INSERT INTO `cidades` VALUES ('4453', '13', 'Santa Rita de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4454', '9', 'Santa Rita do Araguaia', 'GO');
            INSERT INTO `cidades` VALUES ('4455', '13', 'Santa Rita do Itueto', 'MG');
            INSERT INTO `cidades` VALUES ('4456', '9', 'Santa Rita do Novo Destino', 'GO');
            INSERT INTO `cidades` VALUES ('4457', '12', 'Santa Rita do Pardo', 'MS');
            INSERT INTO `cidades` VALUES ('4458', '25', 'Santa Rita do Passa Quatro', 'SP');
            INSERT INTO `cidades` VALUES ('4459', '13', 'Santa Rita do Sapucaí', 'MG');
            INSERT INTO `cidades` VALUES ('4460', '27', 'Santa Rita do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4461', '11', 'Santa Rita do Trivelato', 'MT');
            INSERT INTO `cidades` VALUES ('4462', '25', 'Santa Rita d\'Oeste', 'SP');
            INSERT INTO `cidades` VALUES ('4463', '21', 'Santa Rosa', 'RS');
            INSERT INTO `cidades` VALUES ('4464', '13', 'Santa Rosa da Serra', 'MG');
            INSERT INTO `cidades` VALUES ('4465', '9', 'Santa Rosa de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('4466', '24', 'Santa Rosa de Lima', 'SC');
            INSERT INTO `cidades` VALUES ('4467', '26', 'Santa Rosa de Lima', 'SE');
            INSERT INTO `cidades` VALUES ('4468', '25', 'Santa Rosa de Viterbo', 'SP');
            INSERT INTO `cidades` VALUES ('4469', '18', 'Santa Rosa do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4470', '1', 'Santa Rosa do Purus', 'AC');
            INSERT INTO `cidades` VALUES ('4471', '24', 'Santa Rosa do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('4472', '27', 'Santa Rosa do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4473', '25', 'Santa Salete', 'SP');
            INSERT INTO `cidades` VALUES ('4474', '8', 'Santa Teresa', 'ES');
            INSERT INTO `cidades` VALUES ('4475', '5', 'Santa Teresinha', 'BA');
            INSERT INTO `cidades` VALUES ('4476', '15', 'Santa Teresinha', 'PB');
            INSERT INTO `cidades` VALUES ('4477', '21', 'Santa Tereza', 'RS');
            INSERT INTO `cidades` VALUES ('4478', '9', 'Santa Tereza de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('4479', '16', 'Santa Tereza do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('4480', '27', 'Santa Tereza do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4481', '11', 'Santa Terezinha', 'MT');
            INSERT INTO `cidades` VALUES ('4482', '17', 'Santa Terezinha', 'PE');
            INSERT INTO `cidades` VALUES ('4483', '24', 'Santa Terezinha', 'SC');
            INSERT INTO `cidades` VALUES ('4484', '9', 'Santa Terezinha de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('4485', '16', 'Santa Terezinha de Itaipu', 'PR');
            INSERT INTO `cidades` VALUES ('4486', '24', 'Santa Terezinha do Progresso', 'SC');
            INSERT INTO `cidades` VALUES ('4487', '27', 'Santa Terezinha do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4488', '13', 'Santa Vitória', 'MG');
            INSERT INTO `cidades` VALUES ('4489', '21', 'Santa Vitória do Palmar', 'RS');
            INSERT INTO `cidades` VALUES ('4490', '5', 'Santaluz', 'BA');
            INSERT INTO `cidades` VALUES ('4491', '3', 'Santana', 'AP');
            INSERT INTO `cidades` VALUES ('4492', '5', 'Santana', 'BA');
            INSERT INTO `cidades` VALUES ('4493', '21', 'Santana da Boa Vista', 'RS');
            INSERT INTO `cidades` VALUES ('4494', '25', 'Santana da Ponte Pensa', 'SP');
            INSERT INTO `cidades` VALUES ('4495', '13', 'Santana da Vargem', 'MG');
            INSERT INTO `cidades` VALUES ('4496', '13', 'Santana de Cataguases', 'MG');
            INSERT INTO `cidades` VALUES ('4497', '15', 'Santana de Mangueira', 'PB');
            INSERT INTO `cidades` VALUES ('4498', '25', 'Santana de Parnaíba', 'SP');
            INSERT INTO `cidades` VALUES ('4499', '13', 'Santana de Pirapama', 'MG');
            INSERT INTO `cidades` VALUES ('4500', '6', 'Santana do Acaraú', 'CE');
            INSERT INTO `cidades` VALUES ('4501', '14', 'Santana do Araguaia', 'PA');
            INSERT INTO `cidades` VALUES ('4502', '6', 'Santana do Cariri', 'CE');
            INSERT INTO `cidades` VALUES ('4503', '13', 'Santana do Deserto', 'MG');
            INSERT INTO `cidades` VALUES ('4504', '13', 'Santana do Garambéu', 'MG');
            INSERT INTO `cidades` VALUES ('4505', '2', 'Santana do Ipanema', 'AL');
            INSERT INTO `cidades` VALUES ('4506', '16', 'Santana do Itararé', 'PR');
            INSERT INTO `cidades` VALUES ('4507', '13', 'Santana do Jacaré', 'MG');
            INSERT INTO `cidades` VALUES ('4508', '21', 'Sant\'Ana do Livramento', 'RS');
            INSERT INTO `cidades` VALUES ('4509', '13', 'Santana do Manhuaçu', 'MG');
            INSERT INTO `cidades` VALUES ('4510', '10', 'Santana do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('4511', '20', 'Santana do Matos', 'RN');
            INSERT INTO `cidades` VALUES ('4512', '2', 'Santana do Mundaú', 'AL');
            INSERT INTO `cidades` VALUES ('4513', '13', 'Santana do Paraíso', 'MG');
            INSERT INTO `cidades` VALUES ('4514', '18', 'Santana do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4515', '13', 'Santana do Riacho', 'MG');
            INSERT INTO `cidades` VALUES ('4516', '26', 'Santana do São Francisco', 'SE');
            INSERT INTO `cidades` VALUES ('4517', '20', 'Santana do Seridó', 'RN');
            INSERT INTO `cidades` VALUES ('4518', '15', 'Santana dos Garrotes', 'PB');
            INSERT INTO `cidades` VALUES ('4519', '13', 'Santana dos Montes', 'MG');
            INSERT INTO `cidades` VALUES ('4520', '5', 'Santanópolis', 'BA');
            INSERT INTO `cidades` VALUES ('4521', '14', 'Santarém', 'PA');
            INSERT INTO `cidades` VALUES ('4522', '14', 'Santarém Novo', 'PA');
            INSERT INTO `cidades` VALUES ('4523', '21', 'Santiago', 'RS');
            INSERT INTO `cidades` VALUES ('4524', '24', 'Santiago do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('4525', '11', 'Santo Afonso', 'MT');
            INSERT INTO `cidades` VALUES ('4526', '5', 'Santo Amaro', 'BA');
            INSERT INTO `cidades` VALUES ('4527', '24', 'Santo Amaro da Imperatriz', 'SC');
            INSERT INTO `cidades` VALUES ('4528', '26', 'Santo Amaro das Brotas', 'SE');
            INSERT INTO `cidades` VALUES ('4529', '10', 'Santo Amaro do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('4530', '25', 'Santo Anastácio', 'SP');
            INSERT INTO `cidades` VALUES ('4531', '15', 'Santo André', 'PB');
            INSERT INTO `cidades` VALUES ('4532', '25', 'Santo André', 'SP');
            INSERT INTO `cidades` VALUES ('4533', '21', 'Santo Ângelo', 'RS');
            INSERT INTO `cidades` VALUES ('4534', '20', 'Santo Antônio', 'RN');
            INSERT INTO `cidades` VALUES ('4535', '25', 'Santo Antônio da Alegria', 'SP');
            INSERT INTO `cidades` VALUES ('4536', '9', 'Santo Antônio da Barra', 'GO');
            INSERT INTO `cidades` VALUES ('4537', '21', 'Santo Antônio da Patrulha', 'RS');
            INSERT INTO `cidades` VALUES ('4538', '16', 'Santo Antônio da Platina', 'PR');
            INSERT INTO `cidades` VALUES ('4539', '21', 'Santo Antônio das Missões', 'RS');
            INSERT INTO `cidades` VALUES ('4540', '9', 'Santo Antônio de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('4541', '5', 'Santo Antônio de Jesus', 'BA');
            INSERT INTO `cidades` VALUES ('4542', '18', 'Santo Antônio de Lisboa', 'PI');
            INSERT INTO `cidades` VALUES ('4543', '19', 'Santo Antônio de Pádua', 'RJ');
            INSERT INTO `cidades` VALUES ('4544', '25', 'Santo Antônio de Posse', 'SP');
            INSERT INTO `cidades` VALUES ('4545', '13', 'Santo Antônio do Amparo', 'MG');
            INSERT INTO `cidades` VALUES ('4546', '25', 'Santo Antônio do Aracanguá', 'SP');
            INSERT INTO `cidades` VALUES ('4547', '13', 'Santo Antônio do Aventureiro', 'MG');
            INSERT INTO `cidades` VALUES ('4548', '16', 'Santo Antônio do Caiuá', 'PR');
            INSERT INTO `cidades` VALUES ('4549', '9', 'Santo Antônio do Descoberto', 'GO');
            INSERT INTO `cidades` VALUES ('4550', '13', 'Santo Antônio do Grama', 'MG');
            INSERT INTO `cidades` VALUES ('4551', '4', 'Santo Antônio do Içá', 'AM');
            INSERT INTO `cidades` VALUES ('4552', '13', 'Santo Antônio do Itambé', 'MG');
            INSERT INTO `cidades` VALUES ('4553', '13', 'Santo Antônio do Jacinto', 'MG');
            INSERT INTO `cidades` VALUES ('4554', '25', 'Santo Antônio do Jardim', 'SP');
            INSERT INTO `cidades` VALUES ('4555', '11', 'Santo Antônio do Leste', 'MT');
            INSERT INTO `cidades` VALUES ('4556', '11', 'Santo Antônio do Leverger', 'MT');
            INSERT INTO `cidades` VALUES ('4557', '13', 'Santo Antônio do Monte', 'MG');
            INSERT INTO `cidades` VALUES ('4558', '21', 'Santo Antônio do Palma', 'RS');
            INSERT INTO `cidades` VALUES ('4559', '16', 'Santo Antônio do Paraíso', 'PR');
            INSERT INTO `cidades` VALUES ('4560', '25', 'Santo Antônio do Pinhal', 'SP');
            INSERT INTO `cidades` VALUES ('4561', '21', 'Santo Antônio do Planalto', 'RS');
            INSERT INTO `cidades` VALUES ('4562', '13', 'Santo Antônio do Retiro', 'MG');
            INSERT INTO `cidades` VALUES ('4563', '13', 'Santo Antônio do Rio Abaixo', 'MG');
            INSERT INTO `cidades` VALUES ('4564', '16', 'Santo Antônio do Sudoeste', 'PR');
            INSERT INTO `cidades` VALUES ('4565', '14', 'Santo Antônio do Tauá', 'PA');
            INSERT INTO `cidades` VALUES ('4566', '10', 'Santo Antônio dos Lopes', 'MA');
            INSERT INTO `cidades` VALUES ('4567', '18', 'Santo Antônio dos Milagres', 'PI');
            INSERT INTO `cidades` VALUES ('4568', '21', 'Santo Augusto', 'RS');
            INSERT INTO `cidades` VALUES ('4569', '21', 'Santo Cristo', 'RS');
            INSERT INTO `cidades` VALUES ('4570', '5', 'Santo Estêvão', 'BA');
            INSERT INTO `cidades` VALUES ('4571', '25', 'Santo Expedito', 'SP');
            INSERT INTO `cidades` VALUES ('4572', '21', 'Santo Expedito do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4573', '13', 'Santo Hipólito', 'MG');
            INSERT INTO `cidades` VALUES ('4574', '16', 'Santo Inácio', 'PR');
            INSERT INTO `cidades` VALUES ('4575', '18', 'Santo Inácio do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4576', '25', 'Santópolis do Aguapeí', 'SP');
            INSERT INTO `cidades` VALUES ('4577', '25', 'Santos', 'SP');
            INSERT INTO `cidades` VALUES ('4578', '13', 'Santos Dumont', 'MG');
            INSERT INTO `cidades` VALUES ('4579', '6', 'São Benedito', 'CE');
            INSERT INTO `cidades` VALUES ('4580', '10', 'São Benedito do Rio Preto', 'MA');
            INSERT INTO `cidades` VALUES ('4581', '17', 'São Benedito do Sul', 'PE');
            INSERT INTO `cidades` VALUES ('4582', '15', 'São Bentinho', 'PB');
            INSERT INTO `cidades` VALUES ('4583', '10', 'São Bento', 'MA');
            INSERT INTO `cidades` VALUES ('4584', '15', 'São Bento', 'PB');
            INSERT INTO `cidades` VALUES ('4585', '13', 'São Bento Abade', 'MG');
            INSERT INTO `cidades` VALUES ('4586', '20', 'São Bento do Norte', 'RN');
            INSERT INTO `cidades` VALUES ('4587', '25', 'São Bento do Sapucaí', 'SP');
            INSERT INTO `cidades` VALUES ('4588', '24', 'São Bento do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('4589', '27', 'São Bento do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4590', '20', 'São Bento do Trairí', 'RN');
            INSERT INTO `cidades` VALUES ('4591', '17', 'São Bento do Una', 'PE');
            INSERT INTO `cidades` VALUES ('4592', '24', 'São Bernardino', 'SC');
            INSERT INTO `cidades` VALUES ('4593', '10', 'São Bernardo', 'MA');
            INSERT INTO `cidades` VALUES ('4594', '25', 'São Bernardo do Campo', 'SP');
            INSERT INTO `cidades` VALUES ('4595', '24', 'São Bonifácio', 'SC');
            INSERT INTO `cidades` VALUES ('4596', '21', 'São Borja', 'RS');
            INSERT INTO `cidades` VALUES ('4597', '2', 'São Brás', 'AL');
            INSERT INTO `cidades` VALUES ('4598', '13', 'São Brás do Suaçuí', 'MG');
            INSERT INTO `cidades` VALUES ('4599', '18', 'São Braz do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4600', '14', 'São Caetano de Odivelas', 'PA');
            INSERT INTO `cidades` VALUES ('4601', '25', 'São Caetano do Sul', 'SP');
            INSERT INTO `cidades` VALUES ('4602', '17', 'São Caitano', 'PE');
            INSERT INTO `cidades` VALUES ('4603', '24', 'São Carlos', 'SC');
            INSERT INTO `cidades` VALUES ('4604', '25', 'São Carlos', 'SP');
            INSERT INTO `cidades` VALUES ('4605', '16', 'São Carlos do Ivaí', 'PR');
            INSERT INTO `cidades` VALUES ('4606', '26', 'São Cristóvão', 'SE');
            INSERT INTO `cidades` VALUES ('4607', '24', 'São Cristovão do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('4608', '5', 'São Desidério', 'BA');
            INSERT INTO `cidades` VALUES ('4609', '5', 'São Domingos', 'BA');
            INSERT INTO `cidades` VALUES ('4610', '9', 'São Domingos', 'GO');
            INSERT INTO `cidades` VALUES ('4611', '15', 'São Domingos', 'PB');
            INSERT INTO `cidades` VALUES ('4612', '24', 'São Domingos', 'SC');
            INSERT INTO `cidades` VALUES ('4613', '26', 'São Domingos', 'SE');
            INSERT INTO `cidades` VALUES ('4614', '13', 'São Domingos das Dores', 'MG');
            INSERT INTO `cidades` VALUES ('4615', '14', 'São Domingos do Araguaia', 'PA');
            INSERT INTO `cidades` VALUES ('4616', '10', 'São Domingos do Azeitão', 'MA');
            INSERT INTO `cidades` VALUES ('4617', '14', 'São Domingos do Capim', 'PA');
            INSERT INTO `cidades` VALUES ('4618', '15', 'São Domingos do Cariri', 'PB');
            INSERT INTO `cidades` VALUES ('4619', '10', 'São Domingos do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('4620', '8', 'São Domingos do Norte', 'ES');
            INSERT INTO `cidades` VALUES ('4621', '13', 'São Domingos do Prata', 'MG');
            INSERT INTO `cidades` VALUES ('4622', '21', 'São Domingos do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4623', '5', 'São Felipe', 'BA');
            INSERT INTO `cidades` VALUES ('4624', '22', 'São Felipe D\'Oeste', 'RO');
            INSERT INTO `cidades` VALUES ('4625', '5', 'São Félix', 'BA');
            INSERT INTO `cidades` VALUES ('4626', '10', 'São Félix de Balsas', 'MA');
            INSERT INTO `cidades` VALUES ('4627', '13', 'São Félix de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4628', '11', 'São Félix do Araguaia', 'MT');
            INSERT INTO `cidades` VALUES ('4629', '5', 'São Félix do Coribe', 'BA');
            INSERT INTO `cidades` VALUES ('4630', '18', 'São Félix do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4631', '27', 'São Félix do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4632', '14', 'São Félix do Xingu', 'PA');
            INSERT INTO `cidades` VALUES ('4633', '20', 'São Fernando', 'RN');
            INSERT INTO `cidades` VALUES ('4634', '19', 'São Fidélis', 'RJ');
            INSERT INTO `cidades` VALUES ('4635', '13', 'São Francisco', 'MG');
            INSERT INTO `cidades` VALUES ('4636', '15', 'São Francisco', 'PB');
            INSERT INTO `cidades` VALUES ('4637', '26', 'São Francisco', 'SE');
            INSERT INTO `cidades` VALUES ('4638', '25', 'São Francisco', 'SP');
            INSERT INTO `cidades` VALUES ('4639', '21', 'São Francisco de Assis', 'RS');
            INSERT INTO `cidades` VALUES ('4640', '18', 'São Francisco de Assis do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4641', '9', 'São Francisco de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('4642', '19', 'São Francisco de Itabapoana', 'RJ');
            INSERT INTO `cidades` VALUES ('4643', '13', 'São Francisco de Paula', 'MG');
            INSERT INTO `cidades` VALUES ('4644', '21', 'São Francisco de Paula', 'RS');
            INSERT INTO `cidades` VALUES ('4645', '13', 'São Francisco de Sales', 'MG');
            INSERT INTO `cidades` VALUES ('4646', '10', 'São Francisco do Brejão', 'MA');
            INSERT INTO `cidades` VALUES ('4647', '5', 'São Francisco do Conde', 'BA');
            INSERT INTO `cidades` VALUES ('4648', '13', 'São Francisco do Glória', 'MG');
            INSERT INTO `cidades` VALUES ('4649', '22', 'São Francisco do Guaporé', 'RO');
            INSERT INTO `cidades` VALUES ('4650', '10', 'São Francisco do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('4651', '20', 'São Francisco do Oeste', 'RN');
            INSERT INTO `cidades` VALUES ('4652', '14', 'São Francisco do Pará', 'PA');
            INSERT INTO `cidades` VALUES ('4653', '18', 'São Francisco do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4654', '24', 'São Francisco do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('4655', '5', 'São Gabriel', 'BA');
            INSERT INTO `cidades` VALUES ('4656', '21', 'São Gabriel', 'RS');
            INSERT INTO `cidades` VALUES ('4657', '4', 'São Gabriel da Cachoeira', 'AM');
            INSERT INTO `cidades` VALUES ('4658', '8', 'São Gabriel da Palha', 'ES');
            INSERT INTO `cidades` VALUES ('4659', '12', 'São Gabriel do Oeste', 'MS');
            INSERT INTO `cidades` VALUES ('4660', '13', 'São Geraldo', 'MG');
            INSERT INTO `cidades` VALUES ('4661', '13', 'São Geraldo da Piedade', 'MG');
            INSERT INTO `cidades` VALUES ('4662', '14', 'São Geraldo do Araguaia', 'PA');
            INSERT INTO `cidades` VALUES ('4663', '13', 'São Geraldo do Baixio', 'MG');
            INSERT INTO `cidades` VALUES ('4664', '19', 'São Gonçalo', 'RJ');
            INSERT INTO `cidades` VALUES ('4665', '13', 'São Gonçalo do Abaeté', 'MG');
            INSERT INTO `cidades` VALUES ('4666', '6', 'São Gonçalo do Amarante', 'CE');
            INSERT INTO `cidades` VALUES ('4667', '20', 'São Gonçalo do Amarante', 'RN');
            INSERT INTO `cidades` VALUES ('4668', '18', 'São Gonçalo do Gurguéia', 'PI');
            INSERT INTO `cidades` VALUES ('4669', '13', 'São Gonçalo do Pará', 'MG');
            INSERT INTO `cidades` VALUES ('4670', '18', 'São Gonçalo do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4671', '13', 'São Gonçalo do Rio Abaixo', 'MG');
            INSERT INTO `cidades` VALUES ('4672', '13', 'São Gonçalo do Rio Preto', 'MG');
            INSERT INTO `cidades` VALUES ('4673', '13', 'São Gonçalo do Sapucaí', 'MG');
            INSERT INTO `cidades` VALUES ('4674', '5', 'São Gonçalo dos Campos', 'BA');
            INSERT INTO `cidades` VALUES ('4675', '13', 'São Gotardo', 'MG');
            INSERT INTO `cidades` VALUES ('4676', '21', 'São Jerônimo', 'RS');
            INSERT INTO `cidades` VALUES ('4677', '16', 'São Jerônimo da Serra', 'PR');
            INSERT INTO `cidades` VALUES ('4678', '17', 'São João', 'PE');
            INSERT INTO `cidades` VALUES ('4679', '16', 'São João', 'PR');
            INSERT INTO `cidades` VALUES ('4680', '10', 'São João Batista', 'MA');
            INSERT INTO `cidades` VALUES ('4681', '24', 'São João Batista', 'SC');
            INSERT INTO `cidades` VALUES ('4682', '13', 'São João Batista do Glória', 'MG');
            INSERT INTO `cidades` VALUES ('4683', '23', 'São João da Baliza', 'RR');
            INSERT INTO `cidades` VALUES ('4684', '19', 'São João da Barra', 'RJ');
            INSERT INTO `cidades` VALUES ('4685', '25', 'São João da Boa Vista', 'SP');
            INSERT INTO `cidades` VALUES ('4686', '18', 'São João da Canabrava', 'PI');
            INSERT INTO `cidades` VALUES ('4687', '18', 'São João da Fronteira', 'PI');
            INSERT INTO `cidades` VALUES ('4688', '13', 'São João da Lagoa', 'MG');
            INSERT INTO `cidades` VALUES ('4689', '13', 'São João da Mata', 'MG');
            INSERT INTO `cidades` VALUES ('4690', '9', 'São João da Paraúna', 'GO');
            INSERT INTO `cidades` VALUES ('4691', '14', 'São João da Ponta', 'PA');
            INSERT INTO `cidades` VALUES ('4692', '13', 'São João da Ponte', 'MG');
            INSERT INTO `cidades` VALUES ('4693', '18', 'São João da Serra', 'PI');
            INSERT INTO `cidades` VALUES ('4694', '21', 'São João da Urtiga', 'RS');
            INSERT INTO `cidades` VALUES ('4695', '18', 'São João da Varjota', 'PI');
            INSERT INTO `cidades` VALUES ('4696', '9', 'São João d\'Aliança', 'GO');
            INSERT INTO `cidades` VALUES ('4697', '25', 'São João das Duas Pontes', 'SP');
            INSERT INTO `cidades` VALUES ('4698', '13', 'São João das Missões', 'MG');
            INSERT INTO `cidades` VALUES ('4699', '25', 'São João de Iracema', 'SP');
            INSERT INTO `cidades` VALUES ('4700', '19', 'São João de Meriti', 'RJ');
            INSERT INTO `cidades` VALUES ('4701', '14', 'São João de Pirabas', 'PA');
            INSERT INTO `cidades` VALUES ('4702', '13', 'São João del Rei', 'MG');
            INSERT INTO `cidades` VALUES ('4703', '14', 'São João do Araguaia', 'PA');
            INSERT INTO `cidades` VALUES ('4704', '18', 'São João do Arraial', 'PI');
            INSERT INTO `cidades` VALUES ('4705', '16', 'São João do Caiuá', 'PR');
            INSERT INTO `cidades` VALUES ('4706', '15', 'São João do Cariri', 'PB');
            INSERT INTO `cidades` VALUES ('4707', '10', 'São João do Carú', 'MA');
            INSERT INTO `cidades` VALUES ('4708', '24', 'São João do Itaperiú', 'SC');
            INSERT INTO `cidades` VALUES ('4709', '16', 'São João do Ivaí', 'PR');
            INSERT INTO `cidades` VALUES ('4710', '6', 'São João do Jaguaribe', 'CE');
            INSERT INTO `cidades` VALUES ('4711', '13', 'São João do Manhuaçu', 'MG');
            INSERT INTO `cidades` VALUES ('4712', '13', 'São João do Manteninha', 'MG');
            INSERT INTO `cidades` VALUES ('4713', '24', 'São João do Oeste', 'SC');
            INSERT INTO `cidades` VALUES ('4714', '13', 'São João do Oriente', 'MG');
            INSERT INTO `cidades` VALUES ('4715', '13', 'São João do Pacuí', 'MG');
            INSERT INTO `cidades` VALUES ('4716', '10', 'São João do Paraíso', 'MA');
            INSERT INTO `cidades` VALUES ('4717', '13', 'São João do Paraíso', 'MG');
            INSERT INTO `cidades` VALUES ('4718', '25', 'São João do Pau d\'Alho', 'SP');
            INSERT INTO `cidades` VALUES ('4719', '18', 'São João do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4720', '21', 'São João do Polêsine', 'RS');
            INSERT INTO `cidades` VALUES ('4721', '15', 'São João do Rio do Peixe', 'PB');
            INSERT INTO `cidades` VALUES ('4722', '20', 'São João do Sabugi', 'RN');
            INSERT INTO `cidades` VALUES ('4723', '10', 'São João do Soter', 'MA');
            INSERT INTO `cidades` VALUES ('4724', '24', 'São João do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('4725', '15', 'São João do Tigre', 'PB');
            INSERT INTO `cidades` VALUES ('4726', '16', 'São João do Triunfo', 'PR');
            INSERT INTO `cidades` VALUES ('4727', '10', 'São João dos Patos', 'MA');
            INSERT INTO `cidades` VALUES ('4728', '13', 'São João Evangelista', 'MG');
            INSERT INTO `cidades` VALUES ('4729', '13', 'São João Nepomuceno', 'MG');
            INSERT INTO `cidades` VALUES ('4730', '24', 'São Joaquim', 'SC');
            INSERT INTO `cidades` VALUES ('4731', '25', 'São Joaquim da Barra', 'SP');
            INSERT INTO `cidades` VALUES ('4732', '13', 'São Joaquim de Bicas', 'MG');
            INSERT INTO `cidades` VALUES ('4733', '17', 'São Joaquim do Monte', 'PE');
            INSERT INTO `cidades` VALUES ('4734', '21', 'São Jorge', 'RS');
            INSERT INTO `cidades` VALUES ('4735', '16', 'São Jorge do Ivaí', 'PR');
            INSERT INTO `cidades` VALUES ('4736', '16', 'São Jorge do Patrocínio', 'PR');
            INSERT INTO `cidades` VALUES ('4737', '16', 'São Jorge d\'Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('4738', '24', 'São José', 'SC');
            INSERT INTO `cidades` VALUES ('4739', '13', 'São José da Barra', 'MG');
            INSERT INTO `cidades` VALUES ('4740', '25', 'São José da Bela Vista', 'SP');
            INSERT INTO `cidades` VALUES ('4741', '16', 'São José da Boa Vista', 'PR');
            INSERT INTO `cidades` VALUES ('4742', '17', 'São José da Coroa Grande', 'PE');
            INSERT INTO `cidades` VALUES ('4743', '15', 'São José da Lagoa Tapada', 'PB');
            INSERT INTO `cidades` VALUES ('4744', '2', 'São José da Laje', 'AL');
            INSERT INTO `cidades` VALUES ('4745', '13', 'São José da Lapa', 'MG');
            INSERT INTO `cidades` VALUES ('4746', '13', 'São José da Safira', 'MG');
            INSERT INTO `cidades` VALUES ('4747', '2', 'São José da Tapera', 'AL');
            INSERT INTO `cidades` VALUES ('4748', '13', 'São José da Varginha', 'MG');
            INSERT INTO `cidades` VALUES ('4749', '5', 'São José da Vitória', 'BA');
            INSERT INTO `cidades` VALUES ('4750', '21', 'São José das Missões', 'RS');
            INSERT INTO `cidades` VALUES ('4751', '16', 'São José das Palmeiras', 'PR');
            INSERT INTO `cidades` VALUES ('4752', '15', 'São José de Caiana', 'PB');
            INSERT INTO `cidades` VALUES ('4753', '15', 'São José de Espinharas', 'PB');
            INSERT INTO `cidades` VALUES ('4754', '20', 'São José de Mipibu', 'RN');
            INSERT INTO `cidades` VALUES ('4755', '15', 'São José de Piranhas', 'PB');
            INSERT INTO `cidades` VALUES ('4756', '15', 'São José de Princesa', 'PB');
            INSERT INTO `cidades` VALUES ('4757', '10', 'São José de Ribamar', 'MA');
            INSERT INTO `cidades` VALUES ('4758', '19', 'São José de Ubá', 'RJ');
            INSERT INTO `cidades` VALUES ('4759', '13', 'São José do Alegre', 'MG');
            INSERT INTO `cidades` VALUES ('4760', '25', 'São José do Barreiro', 'SP');
            INSERT INTO `cidades` VALUES ('4761', '17', 'São José do Belmonte', 'PE');
            INSERT INTO `cidades` VALUES ('4762', '15', 'São José do Bonfim', 'PB');
            INSERT INTO `cidades` VALUES ('4763', '15', 'São José do Brejo do Cruz', 'PB');
            INSERT INTO `cidades` VALUES ('4764', '8', 'São José do Calçado', 'ES');
            INSERT INTO `cidades` VALUES ('4765', '20', 'São José do Campestre', 'RN');
            INSERT INTO `cidades` VALUES ('4766', '24', 'São José do Cedro', 'SC');
            INSERT INTO `cidades` VALUES ('4767', '24', 'São José do Cerrito', 'SC');
            INSERT INTO `cidades` VALUES ('4768', '13', 'São José do Divino', 'MG');
            INSERT INTO `cidades` VALUES ('4769', '18', 'São José do Divino', 'PI');
            INSERT INTO `cidades` VALUES ('4770', '17', 'São José do Egito', 'PE');
            INSERT INTO `cidades` VALUES ('4771', '13', 'São José do Goiabal', 'MG');
            INSERT INTO `cidades` VALUES ('4772', '21', 'São José do Herval', 'RS');
            INSERT INTO `cidades` VALUES ('4773', '21', 'São José do Hortêncio', 'RS');
            INSERT INTO `cidades` VALUES ('4774', '21', 'São José do Inhacorá', 'RS');
            INSERT INTO `cidades` VALUES ('4775', '5', 'São José do Jacuípe', 'BA');
            INSERT INTO `cidades` VALUES ('4776', '13', 'São José do Jacuri', 'MG');
            INSERT INTO `cidades` VALUES ('4777', '13', 'São José do Mantimento', 'MG');
            INSERT INTO `cidades` VALUES ('4778', '21', 'São José do Norte', 'RS');
            INSERT INTO `cidades` VALUES ('4779', '21', 'São José do Ouro', 'RS');
            INSERT INTO `cidades` VALUES ('4780', '18', 'São José do Peixe', 'PI');
            INSERT INTO `cidades` VALUES ('4781', '18', 'São José do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4782', '11', 'São José do Povo', 'MT');
            INSERT INTO `cidades` VALUES ('4783', '11', 'São José do Rio Claro', 'MT');
            INSERT INTO `cidades` VALUES ('4784', '25', 'São José do Rio Pardo', 'SP');
            INSERT INTO `cidades` VALUES ('4785', '25', 'São José do Rio Preto', 'SP');
            INSERT INTO `cidades` VALUES ('4786', '15', 'São José do Sabugi', 'PB');
            INSERT INTO `cidades` VALUES ('4787', '20', 'São José do Seridó', 'RN');
            INSERT INTO `cidades` VALUES ('4788', '21', 'São José do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4789', '19', 'São José do Vale do Rio Preto', 'RJ');
            INSERT INTO `cidades` VALUES ('4790', '11', 'São José do Xingu', 'MT');
            INSERT INTO `cidades` VALUES ('4791', '21', 'São José dos Ausentes', 'RS');
            INSERT INTO `cidades` VALUES ('4792', '10', 'São José dos Basílios', 'MA');
            INSERT INTO `cidades` VALUES ('4793', '25', 'São José dos Campos', 'SP');
            INSERT INTO `cidades` VALUES ('4794', '15', 'São José dos Cordeiros', 'PB');
            INSERT INTO `cidades` VALUES ('4795', '16', 'São José dos Pinhais', 'PR');
            INSERT INTO `cidades` VALUES ('4796', '11', 'São José dos Quatro Marcos', 'MT');
            INSERT INTO `cidades` VALUES ('4797', '15', 'São José dos Ramos', 'PB');
            INSERT INTO `cidades` VALUES ('4798', '18', 'São Julião', 'PI');
            INSERT INTO `cidades` VALUES ('4799', '21', 'São Leopoldo', 'RS');
            INSERT INTO `cidades` VALUES ('4800', '13', 'São Lourenço', 'MG');
            INSERT INTO `cidades` VALUES ('4801', '17', 'São Lourenço da Mata', 'PE');
            INSERT INTO `cidades` VALUES ('4802', '25', 'São Lourenço da Serra', 'SP');
            INSERT INTO `cidades` VALUES ('4803', '24', 'São Lourenço do Oeste', 'SC');
            INSERT INTO `cidades` VALUES ('4804', '18', 'São Lourenço do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4805', '21', 'São Lourenço do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4806', '24', 'São Ludgero', 'SC');
            INSERT INTO `cidades` VALUES ('4807', '10', 'São Luís', 'MA');
            INSERT INTO `cidades` VALUES ('4808', '9', 'São Luís de Montes Belos', 'GO');
            INSERT INTO `cidades` VALUES ('4809', '6', 'São Luís do Curu', 'CE');
            INSERT INTO `cidades` VALUES ('4810', '25', 'São Luís do Paraitinga', 'SP');
            INSERT INTO `cidades` VALUES ('4811', '18', 'São Luis do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4812', '2', 'São Luís do Quitunde', 'AL');
            INSERT INTO `cidades` VALUES ('4813', '10', 'São Luís Gonzaga do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('4814', '23', 'São Luiz', 'RR');
            INSERT INTO `cidades` VALUES ('4815', '9', 'São Luíz do Norte', 'GO');
            INSERT INTO `cidades` VALUES ('4816', '21', 'São Luiz Gonzaga', 'RS');
            INSERT INTO `cidades` VALUES ('4817', '15', 'São Mamede', 'PB');
            INSERT INTO `cidades` VALUES ('4818', '16', 'São Manoel do Paraná', 'PR');
            INSERT INTO `cidades` VALUES ('4819', '25', 'São Manuel', 'SP');
            INSERT INTO `cidades` VALUES ('4820', '21', 'São Marcos', 'RS');
            INSERT INTO `cidades` VALUES ('4821', '21', 'São Martinho', 'RS');
            INSERT INTO `cidades` VALUES ('4822', '24', 'São Martinho', 'SC');
            INSERT INTO `cidades` VALUES ('4823', '21', 'São Martinho da Serra', 'RS');
            INSERT INTO `cidades` VALUES ('4824', '8', 'São Mateus', 'ES');
            INSERT INTO `cidades` VALUES ('4825', '10', 'São Mateus do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('4826', '16', 'São Mateus do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('4827', '20', 'São Miguel', 'RN');
            INSERT INTO `cidades` VALUES ('4828', '25', 'São Miguel Arcanjo', 'SP');
            INSERT INTO `cidades` VALUES ('4829', '18', 'São Miguel da Baixa Grande', 'PI');
            INSERT INTO `cidades` VALUES ('4830', '24', 'São Miguel da Boa Vista', 'SC');
            INSERT INTO `cidades` VALUES ('4831', '5', 'São Miguel das Matas', 'BA');
            INSERT INTO `cidades` VALUES ('4832', '21', 'São Miguel das Missões', 'RS');
            INSERT INTO `cidades` VALUES ('4833', '15', 'São Miguel de Taipu', 'PB');
            INSERT INTO `cidades` VALUES ('4834', '26', 'São Miguel do Aleixo', 'SE');
            INSERT INTO `cidades` VALUES ('4835', '13', 'São Miguel do Anta', 'MG');
            INSERT INTO `cidades` VALUES ('4836', '9', 'São Miguel do Araguaia', 'GO');
            INSERT INTO `cidades` VALUES ('4837', '18', 'São Miguel do Fidalgo', 'PI');
            INSERT INTO `cidades` VALUES ('4838', '20', 'São Miguel do Gostoso', 'RN');
            INSERT INTO `cidades` VALUES ('4839', '14', 'São Miguel do Guamá', 'PA');
            INSERT INTO `cidades` VALUES ('4840', '22', 'São Miguel do Guaporé', 'RO');
            INSERT INTO `cidades` VALUES ('4841', '16', 'São Miguel do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('4842', '24', 'São Miguel do Oeste', 'SC');
            INSERT INTO `cidades` VALUES ('4843', '9', 'São Miguel do Passa Quatro', 'GO');
            INSERT INTO `cidades` VALUES ('4844', '18', 'São Miguel do Tapuio', 'PI');
            INSERT INTO `cidades` VALUES ('4845', '27', 'São Miguel do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4846', '2', 'São Miguel dos Campos', 'AL');
            INSERT INTO `cidades` VALUES ('4847', '2', 'São Miguel dos Milagres', 'AL');
            INSERT INTO `cidades` VALUES ('4848', '21', 'São Nicolau', 'RS');
            INSERT INTO `cidades` VALUES ('4849', '9', 'São Patrício', 'GO');
            INSERT INTO `cidades` VALUES ('4850', '25', 'São Paulo', 'SP');
            INSERT INTO `cidades` VALUES ('4851', '21', 'São Paulo das Missões', 'RS');
            INSERT INTO `cidades` VALUES ('4852', '4', 'São Paulo de Olivença', 'AM');
            INSERT INTO `cidades` VALUES ('4853', '20', 'São Paulo do Potengi', 'RN');
            INSERT INTO `cidades` VALUES ('4854', '20', 'São Pedro', 'RN');
            INSERT INTO `cidades` VALUES ('4855', '25', 'São Pedro', 'SP');
            INSERT INTO `cidades` VALUES ('4856', '10', 'São Pedro da Água Branca', 'MA');
            INSERT INTO `cidades` VALUES ('4857', '19', 'São Pedro da Aldeia', 'RJ');
            INSERT INTO `cidades` VALUES ('4858', '11', 'São Pedro da Cipa', 'MT');
            INSERT INTO `cidades` VALUES ('4859', '21', 'São Pedro da Serra', 'RS');
            INSERT INTO `cidades` VALUES ('4860', '13', 'São Pedro da União', 'MG');
            INSERT INTO `cidades` VALUES ('4861', '21', 'São Pedro das Missões', 'RS');
            INSERT INTO `cidades` VALUES ('4862', '24', 'São Pedro de Alcântara', 'SC');
            INSERT INTO `cidades` VALUES ('4863', '21', 'São Pedro do Butiá', 'RS');
            INSERT INTO `cidades` VALUES ('4864', '16', 'São Pedro do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('4865', '16', 'São Pedro do Ivaí', 'PR');
            INSERT INTO `cidades` VALUES ('4866', '16', 'São Pedro do Paraná', 'PR');
            INSERT INTO `cidades` VALUES ('4867', '18', 'São Pedro do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('4868', '13', 'São Pedro do Suaçuí', 'MG');
            INSERT INTO `cidades` VALUES ('4869', '21', 'São Pedro do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4870', '25', 'São Pedro do Turvo', 'SP');
            INSERT INTO `cidades` VALUES ('4871', '10', 'São Pedro dos Crentes', 'MA');
            INSERT INTO `cidades` VALUES ('4872', '13', 'São Pedro dos Ferros', 'MG');
            INSERT INTO `cidades` VALUES ('4873', '20', 'São Rafael', 'RN');
            INSERT INTO `cidades` VALUES ('4874', '10', 'São Raimundo das Mangabeiras', 'MA');
            INSERT INTO `cidades` VALUES ('4875', '10', 'São Raimundo do Doca Bezerra', 'MA');
            INSERT INTO `cidades` VALUES ('4876', '18', 'São Raimundo Nonato', 'PI');
            INSERT INTO `cidades` VALUES ('4877', '10', 'São Roberto', 'MA');
            INSERT INTO `cidades` VALUES ('4878', '13', 'São Romão', 'MG');
            INSERT INTO `cidades` VALUES ('4879', '25', 'São Roque', 'SP');
            INSERT INTO `cidades` VALUES ('4880', '13', 'São Roque de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4881', '8', 'São Roque do Canaã', 'ES');
            INSERT INTO `cidades` VALUES ('4882', '27', 'São Salvador do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4883', '2', 'São Sebastião', 'AL');
            INSERT INTO `cidades` VALUES ('4884', '25', 'São Sebastião', 'SP');
            INSERT INTO `cidades` VALUES ('4885', '16', 'São Sebastião da Amoreira', 'PR');
            INSERT INTO `cidades` VALUES ('4886', '13', 'São Sebastião da Bela Vista', 'MG');
            INSERT INTO `cidades` VALUES ('4887', '14', 'São Sebastião da Boa Vista', 'PA');
            INSERT INTO `cidades` VALUES ('4888', '25', 'São Sebastião da Grama', 'SP');
            INSERT INTO `cidades` VALUES ('4889', '13', 'São Sebastião da Vargem Alegre', 'MG');
            INSERT INTO `cidades` VALUES ('4890', '15', 'São Sebastião de Lagoa de Roça', 'PB');
            INSERT INTO `cidades` VALUES ('4891', '19', 'São Sebastião do Alto', 'RJ');
            INSERT INTO `cidades` VALUES ('4892', '13', 'São Sebastião do Anta', 'MG');
            INSERT INTO `cidades` VALUES ('4893', '21', 'São Sebastião do Caí', 'RS');
            INSERT INTO `cidades` VALUES ('4894', '13', 'São Sebastião do Maranhão', 'MG');
            INSERT INTO `cidades` VALUES ('4895', '13', 'São Sebastião do Oeste', 'MG');
            INSERT INTO `cidades` VALUES ('4896', '13', 'São Sebastião do Paraíso', 'MG');
            INSERT INTO `cidades` VALUES ('4897', '5', 'São Sebastião do Passé', 'BA');
            INSERT INTO `cidades` VALUES ('4898', '13', 'São Sebastião do Rio Preto', 'MG');
            INSERT INTO `cidades` VALUES ('4899', '13', 'São Sebastião do Rio Verde', 'MG');
            INSERT INTO `cidades` VALUES ('4900', '27', 'São Sebastião do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('4901', '4', 'São Sebastião do Uatumã', 'AM');
            INSERT INTO `cidades` VALUES ('4902', '15', 'São Sebastião do Umbuzeiro', 'PB');
            INSERT INTO `cidades` VALUES ('4903', '21', 'São Sepé', 'RS');
            INSERT INTO `cidades` VALUES ('4904', '9', 'São Simão', 'GO');
            INSERT INTO `cidades` VALUES ('4905', '25', 'São Simão', 'SP');
            INSERT INTO `cidades` VALUES ('4906', '13', 'São Thomé das Letras', 'MG');
            INSERT INTO `cidades` VALUES ('4907', '13', 'São Tiago', 'MG');
            INSERT INTO `cidades` VALUES ('4908', '13', 'São Tomás de Aquino', 'MG');
            INSERT INTO `cidades` VALUES ('4909', '16', 'São Tomé', 'PR');
            INSERT INTO `cidades` VALUES ('4910', '20', 'São Tomé', 'RN');
            INSERT INTO `cidades` VALUES ('4911', '21', 'São Valentim', 'RS');
            INSERT INTO `cidades` VALUES ('4912', '21', 'São Valentim do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4913', '27', 'São Valério', 'TO');
            INSERT INTO `cidades` VALUES ('4914', '21', 'São Valério do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4915', '21', 'São Vendelino', 'RS');
            INSERT INTO `cidades` VALUES ('4916', '20', 'São Vicente', 'RN');
            INSERT INTO `cidades` VALUES ('4917', '25', 'São Vicente', 'SP');
            INSERT INTO `cidades` VALUES ('4918', '13', 'São Vicente de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4919', '21', 'São Vicente do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4920', '10', 'São Vicente Ferrer', 'MA');
            INSERT INTO `cidades` VALUES ('4921', '17', 'São Vicente Ferrer', 'PE');
            INSERT INTO `cidades` VALUES ('4922', '15', 'Sapé', 'PB');
            INSERT INTO `cidades` VALUES ('4923', '5', 'Sapeaçu', 'BA');
            INSERT INTO `cidades` VALUES ('4924', '11', 'Sapezal', 'MT');
            INSERT INTO `cidades` VALUES ('4925', '21', 'Sapiranga', 'RS');
            INSERT INTO `cidades` VALUES ('4926', '16', 'Sapopema', 'PR');
            INSERT INTO `cidades` VALUES ('4927', '14', 'Sapucaia', 'PA');
            INSERT INTO `cidades` VALUES ('4928', '19', 'Sapucaia', 'RJ');
            INSERT INTO `cidades` VALUES ('4929', '21', 'Sapucaia do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4930', '13', 'Sapucaí-Mirim', 'MG');
            INSERT INTO `cidades` VALUES ('4931', '19', 'Saquarema', 'RJ');
            INSERT INTO `cidades` VALUES ('4932', '16', 'Sarandi', 'PR');
            INSERT INTO `cidades` VALUES ('4933', '21', 'Sarandi', 'RS');
            INSERT INTO `cidades` VALUES ('4934', '25', 'Sarapuí', 'SP');
            INSERT INTO `cidades` VALUES ('4935', '13', 'Sardoá', 'MG');
            INSERT INTO `cidades` VALUES ('4936', '25', 'Sarutaiá', 'SP');
            INSERT INTO `cidades` VALUES ('4937', '13', 'Sarzedo', 'MG');
            INSERT INTO `cidades` VALUES ('4938', '5', 'Sátiro Dias', 'BA');
            INSERT INTO `cidades` VALUES ('4939', '2', 'Satuba', 'AL');
            INSERT INTO `cidades` VALUES ('4940', '10', 'Satubinha', 'MA');
            INSERT INTO `cidades` VALUES ('4941', '5', 'Saubara', 'BA');
            INSERT INTO `cidades` VALUES ('4942', '16', 'Saudade do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('4943', '24', 'Saudades', 'SC');
            INSERT INTO `cidades` VALUES ('4944', '5', 'Saúde', 'BA');
            INSERT INTO `cidades` VALUES ('4945', '24', 'Schroeder', 'SC');
            INSERT INTO `cidades` VALUES ('4946', '5', 'Seabra', 'BA');
            INSERT INTO `cidades` VALUES ('4947', '24', 'Seara', 'SC');
            INSERT INTO `cidades` VALUES ('4948', '25', 'Sebastianópolis do Sul', 'SP');
            INSERT INTO `cidades` VALUES ('4949', '18', 'Sebastião Barros', 'PI');
            INSERT INTO `cidades` VALUES ('4950', '5', 'Sebastião Laranjeiras', 'BA');
            INSERT INTO `cidades` VALUES ('4951', '18', 'Sebastião Leal', 'PI');
            INSERT INTO `cidades` VALUES ('4952', '21', 'Seberi', 'RS');
            INSERT INTO `cidades` VALUES ('4953', '21', 'Sede Nova', 'RS');
            INSERT INTO `cidades` VALUES ('4954', '21', 'Segredo', 'RS');
            INSERT INTO `cidades` VALUES ('4955', '21', 'Selbach', 'RS');
            INSERT INTO `cidades` VALUES ('4956', '12', 'Selvíria', 'MS');
            INSERT INTO `cidades` VALUES ('4957', '13', 'Sem-Peixe', 'MG');
            INSERT INTO `cidades` VALUES ('4958', '1', 'Sena Madureira', 'AC');
            INSERT INTO `cidades` VALUES ('4959', '10', 'Senador Alexandre Costa', 'MA');
            INSERT INTO `cidades` VALUES ('4960', '13', 'Senador Amaral', 'MG');
            INSERT INTO `cidades` VALUES ('4961', '9', 'Senador Canedo', 'GO');
            INSERT INTO `cidades` VALUES ('4962', '13', 'Senador Cortes', 'MG');
            INSERT INTO `cidades` VALUES ('4963', '20', 'Senador Elói de Souza', 'RN');
            INSERT INTO `cidades` VALUES ('4964', '13', 'Senador Firmino', 'MG');
            INSERT INTO `cidades` VALUES ('4965', '20', 'Senador Georgino Avelino', 'RN');
            INSERT INTO `cidades` VALUES ('4966', '1', 'Senador Guiomard', 'AC');
            INSERT INTO `cidades` VALUES ('4967', '13', 'Senador José Bento', 'MG');
            INSERT INTO `cidades` VALUES ('4968', '14', 'Senador José Porfírio', 'PA');
            INSERT INTO `cidades` VALUES ('4969', '10', 'Senador La Rocque', 'MA');
            INSERT INTO `cidades` VALUES ('4970', '13', 'Senador Modestino Gonçalves', 'MG');
            INSERT INTO `cidades` VALUES ('4971', '6', 'Senador Pompeu', 'CE');
            INSERT INTO `cidades` VALUES ('4972', '2', 'Senador Rui Palmeira', 'AL');
            INSERT INTO `cidades` VALUES ('4973', '6', 'Senador Sá', 'CE');
            INSERT INTO `cidades` VALUES ('4974', '21', 'Senador Salgado Filho', 'RS');
            INSERT INTO `cidades` VALUES ('4975', '16', 'Sengés', 'PR');
            INSERT INTO `cidades` VALUES ('4976', '5', 'Senhor do Bonfim', 'BA');
            INSERT INTO `cidades` VALUES ('4977', '13', 'Senhora de Oliveira', 'MG');
            INSERT INTO `cidades` VALUES ('4978', '13', 'Senhora do Porto', 'MG');
            INSERT INTO `cidades` VALUES ('4979', '13', 'Senhora dos Remédios', 'MG');
            INSERT INTO `cidades` VALUES ('4980', '21', 'Sentinela do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('4981', '5', 'Sento Sé', 'BA');
            INSERT INTO `cidades` VALUES ('4982', '21', 'Serafina Corrêa', 'RS');
            INSERT INTO `cidades` VALUES ('4983', '13', 'Sericita', 'MG');
            INSERT INTO `cidades` VALUES ('4984', '15', 'Seridó', 'PB');
            INSERT INTO `cidades` VALUES ('4985', '22', 'Seringueiras', 'RO');
            INSERT INTO `cidades` VALUES ('4986', '21', 'Sério', 'RS');
            INSERT INTO `cidades` VALUES ('4987', '13', 'Seritinga', 'MG');
            INSERT INTO `cidades` VALUES ('4988', '19', 'Seropédica', 'RJ');
            INSERT INTO `cidades` VALUES ('4989', '8', 'Serra', 'ES');
            INSERT INTO `cidades` VALUES ('4990', '24', 'Serra Alta', 'SC');
            INSERT INTO `cidades` VALUES ('4991', '25', 'Serra Azul', 'SP');
            INSERT INTO `cidades` VALUES ('4992', '13', 'Serra Azul de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('4993', '15', 'Serra Branca', 'PB');
            INSERT INTO `cidades` VALUES ('4994', '15', 'Serra da Raiz', 'PB');
            INSERT INTO `cidades` VALUES ('4995', '13', 'Serra da Saudade', 'MG');
            INSERT INTO `cidades` VALUES ('4996', '20', 'Serra de São Bento', 'RN');
            INSERT INTO `cidades` VALUES ('4997', '20', 'Serra do Mel', 'RN');
            INSERT INTO `cidades` VALUES ('4998', '3', 'Serra do Navio', 'AP');
            INSERT INTO `cidades` VALUES ('4999', '5', 'Serra do Ramalho', 'BA');
            INSERT INTO `cidades` VALUES ('5000', '13', 'Serra do Salitre', 'MG');
            INSERT INTO `cidades` VALUES ('5001', '13', 'Serra dos Aimorés', 'MG');
            INSERT INTO `cidades` VALUES ('5002', '5', 'Serra Dourada', 'BA');
            INSERT INTO `cidades` VALUES ('5003', '15', 'Serra Grande', 'PB');
            INSERT INTO `cidades` VALUES ('5004', '25', 'Serra Negra', 'SP');
            INSERT INTO `cidades` VALUES ('5005', '20', 'Serra Negra do Norte', 'RN');
            INSERT INTO `cidades` VALUES ('5006', '11', 'Serra Nova Dourada', 'MT');
            INSERT INTO `cidades` VALUES ('5007', '5', 'Serra Preta', 'BA');
            INSERT INTO `cidades` VALUES ('5008', '15', 'Serra Redonda', 'PB');
            INSERT INTO `cidades` VALUES ('5009', '17', 'Serra Talhada', 'PE');
            INSERT INTO `cidades` VALUES ('5010', '25', 'Serrana', 'SP');
            INSERT INTO `cidades` VALUES ('5011', '13', 'Serrania', 'MG');
            INSERT INTO `cidades` VALUES ('5012', '10', 'Serrano do Maranhão', 'MA');
            INSERT INTO `cidades` VALUES ('5013', '9', 'Serranópolis', 'GO');
            INSERT INTO `cidades` VALUES ('5014', '13', 'Serranópolis de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('5015', '16', 'Serranópolis do Iguaçu', 'PR');
            INSERT INTO `cidades` VALUES ('5016', '13', 'Serranos', 'MG');
            INSERT INTO `cidades` VALUES ('5017', '15', 'Serraria', 'PB');
            INSERT INTO `cidades` VALUES ('5018', '5', 'Serrinha', 'BA');
            INSERT INTO `cidades` VALUES ('5019', '20', 'Serrinha', 'RN');
            INSERT INTO `cidades` VALUES ('5020', '20', 'Serrinha dos Pintos', 'RN');
            INSERT INTO `cidades` VALUES ('5021', '17', 'Serrita', 'PE');
            INSERT INTO `cidades` VALUES ('5022', '13', 'Serro', 'MG');
            INSERT INTO `cidades` VALUES ('5023', '5', 'Serrolândia', 'BA');
            INSERT INTO `cidades` VALUES ('5024', '16', 'Sertaneja', 'PR');
            INSERT INTO `cidades` VALUES ('5025', '17', 'Sertânia', 'PE');
            INSERT INTO `cidades` VALUES ('5026', '16', 'Sertanópolis', 'PR');
            INSERT INTO `cidades` VALUES ('5027', '21', 'Sertão', 'RS');
            INSERT INTO `cidades` VALUES ('5028', '21', 'Sertão Santana', 'RS');
            INSERT INTO `cidades` VALUES ('5029', '15', 'Sertãozinho', 'PB');
            INSERT INTO `cidades` VALUES ('5030', '25', 'Sertãozinho', 'SP');
            INSERT INTO `cidades` VALUES ('5031', '25', 'Sete Barras', 'SP');
            INSERT INTO `cidades` VALUES ('5032', '21', 'Sete de Setembro', 'RS');
            INSERT INTO `cidades` VALUES ('5033', '13', 'Sete Lagoas', 'MG');
            INSERT INTO `cidades` VALUES ('5034', '12', 'Sete Quedas', 'MS');
            INSERT INTO `cidades` VALUES ('5035', '13', 'Setubinha', 'MG');
            INSERT INTO `cidades` VALUES ('5036', '21', 'Severiano de Almeida', 'RS');
            INSERT INTO `cidades` VALUES ('5037', '20', 'Severiano Melo', 'RN');
            INSERT INTO `cidades` VALUES ('5038', '25', 'Severínia', 'SP');
            INSERT INTO `cidades` VALUES ('5039', '24', 'Siderópolis', 'SC');
            INSERT INTO `cidades` VALUES ('5040', '12', 'Sidrolândia', 'MS');
            INSERT INTO `cidades` VALUES ('5041', '18', 'Sigefredo Pacheco', 'PI');
            INSERT INTO `cidades` VALUES ('5042', '19', 'Silva Jardim', 'RJ');
            INSERT INTO `cidades` VALUES ('5043', '9', 'Silvânia', 'GO');
            INSERT INTO `cidades` VALUES ('5044', '27', 'Silvanópolis', 'TO');
            INSERT INTO `cidades` VALUES ('5045', '21', 'Silveira Martins', 'RS');
            INSERT INTO `cidades` VALUES ('5046', '13', 'Silveirânia', 'MG');
            INSERT INTO `cidades` VALUES ('5047', '25', 'Silveiras', 'SP');
            INSERT INTO `cidades` VALUES ('5048', '4', 'Silves', 'AM');
            INSERT INTO `cidades` VALUES ('5049', '13', 'Silvianópolis', 'MG');
            INSERT INTO `cidades` VALUES ('5050', '26', 'Simão Dias', 'SE');
            INSERT INTO `cidades` VALUES ('5051', '13', 'Simão Pereira', 'MG');
            INSERT INTO `cidades` VALUES ('5052', '18', 'Simões', 'PI');
            INSERT INTO `cidades` VALUES ('5053', '5', 'Simões Filho', 'BA');
            INSERT INTO `cidades` VALUES ('5054', '9', 'Simolândia', 'GO');
            INSERT INTO `cidades` VALUES ('5055', '13', 'Simonésia', 'MG');
            INSERT INTO `cidades` VALUES ('5056', '18', 'Simplício Mendes', 'PI');
            INSERT INTO `cidades` VALUES ('5057', '21', 'Sinimbu', 'RS');
            INSERT INTO `cidades` VALUES ('5058', '11', 'Sinop', 'MT');
            INSERT INTO `cidades` VALUES ('5059', '16', 'Siqueira Campos', 'PR');
            INSERT INTO `cidades` VALUES ('5060', '17', 'Sirinhaém', 'PE');
            INSERT INTO `cidades` VALUES ('5061', '26', 'Siriri', 'SE');
            INSERT INTO `cidades` VALUES ('5062', '9', 'Sítio d\'Abadia', 'GO');
            INSERT INTO `cidades` VALUES ('5063', '5', 'Sítio do Mato', 'BA');
            INSERT INTO `cidades` VALUES ('5064', '5', 'Sítio do Quinto', 'BA');
            INSERT INTO `cidades` VALUES ('5065', '10', 'Sítio Novo', 'MA');
            INSERT INTO `cidades` VALUES ('5066', '20', 'Sítio Novo', 'RN');
            INSERT INTO `cidades` VALUES ('5067', '27', 'Sítio Novo do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('5068', '5', 'Sobradinho', 'BA');
            INSERT INTO `cidades` VALUES ('5069', '21', 'Sobradinho', 'RS');
            INSERT INTO `cidades` VALUES ('5070', '15', 'Sobrado', 'PB');
            INSERT INTO `cidades` VALUES ('5071', '6', 'Sobral', 'CE');
            INSERT INTO `cidades` VALUES ('5072', '13', 'Sobrália', 'MG');
            INSERT INTO `cidades` VALUES ('5073', '25', 'Socorro', 'SP');
            INSERT INTO `cidades` VALUES ('5074', '18', 'Socorro do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('5075', '15', 'Solânea', 'PB');
            INSERT INTO `cidades` VALUES ('5076', '15', 'Soledade', 'PB');
            INSERT INTO `cidades` VALUES ('5077', '21', 'Soledade', 'RS');
            INSERT INTO `cidades` VALUES ('5078', '13', 'Soledade de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('5079', '17', 'Solidão', 'PE');
            INSERT INTO `cidades` VALUES ('5080', '6', 'Solonópole', 'CE');
            INSERT INTO `cidades` VALUES ('5081', '24', 'Sombrio', 'SC');
            INSERT INTO `cidades` VALUES ('5082', '12', 'Sonora', 'MS');
            INSERT INTO `cidades` VALUES ('5083', '8', 'Sooretama', 'ES');
            INSERT INTO `cidades` VALUES ('5084', '25', 'Sorocaba', 'SP');
            INSERT INTO `cidades` VALUES ('5085', '11', 'Sorriso', 'MT');
            INSERT INTO `cidades` VALUES ('5086', '15', 'Sossêgo', 'PB');
            INSERT INTO `cidades` VALUES ('5087', '14', 'Soure', 'PA');
            INSERT INTO `cidades` VALUES ('5088', '15', 'Sousa', 'PB');
            INSERT INTO `cidades` VALUES ('5089', '5', 'Souto Soares', 'BA');
            INSERT INTO `cidades` VALUES ('5090', '27', 'Sucupira', 'TO');
            INSERT INTO `cidades` VALUES ('5091', '10', 'Sucupira do Norte', 'MA');
            INSERT INTO `cidades` VALUES ('5092', '10', 'Sucupira do Riachão', 'MA');
            INSERT INTO `cidades` VALUES ('5093', '25', 'Sud Mennucci', 'SP');
            INSERT INTO `cidades` VALUES ('5094', '24', 'Sul Brasil', 'SC');
            INSERT INTO `cidades` VALUES ('5095', '16', 'Sulina', 'PR');
            INSERT INTO `cidades` VALUES ('5096', '25', 'Sumaré', 'SP');
            INSERT INTO `cidades` VALUES ('5097', '15', 'Sumé', 'PB');
            INSERT INTO `cidades` VALUES ('5098', '19', 'Sumidouro', 'RJ');
            INSERT INTO `cidades` VALUES ('5099', '17', 'Surubim', 'PE');
            INSERT INTO `cidades` VALUES ('5100', '18', 'Sussuapara', 'PI');
            INSERT INTO `cidades` VALUES ('5101', '25', 'Suzanápolis', 'SP');
            INSERT INTO `cidades` VALUES ('5102', '25', 'Suzano', 'SP');
            INSERT INTO `cidades` VALUES ('5103', '21', 'Tabaí', 'RS');
            INSERT INTO `cidades` VALUES ('5104', '11', 'Tabaporã', 'MT');
            INSERT INTO `cidades` VALUES ('5105', '25', 'Tabapuã', 'SP');
            INSERT INTO `cidades` VALUES ('5106', '4', 'Tabatinga', 'AM');
            INSERT INTO `cidades` VALUES ('5107', '25', 'Tabatinga', 'SP');
            INSERT INTO `cidades` VALUES ('5108', '17', 'Tabira', 'PE');
            INSERT INTO `cidades` VALUES ('5109', '25', 'Taboão da Serra', 'SP');
            INSERT INTO `cidades` VALUES ('5110', '5', 'Tabocas do Brejo Velho', 'BA');
            INSERT INTO `cidades` VALUES ('5111', '20', 'Taboleiro Grande', 'RN');
            INSERT INTO `cidades` VALUES ('5112', '13', 'Tabuleiro', 'MG');
            INSERT INTO `cidades` VALUES ('5113', '6', 'Tabuleiro do Norte', 'CE');
            INSERT INTO `cidades` VALUES ('5114', '17', 'Tacaimbó', 'PE');
            INSERT INTO `cidades` VALUES ('5115', '17', 'Tacaratu', 'PE');
            INSERT INTO `cidades` VALUES ('5116', '25', 'Taciba', 'SP');
            INSERT INTO `cidades` VALUES ('5117', '15', 'Tacima', 'PB');
            INSERT INTO `cidades` VALUES ('5118', '12', 'Tacuru', 'MS');
            INSERT INTO `cidades` VALUES ('5119', '25', 'Taguaí', 'SP');
            INSERT INTO `cidades` VALUES ('5120', '27', 'Taguatinga', 'TO');
            INSERT INTO `cidades` VALUES ('5121', '25', 'Taiaçu', 'SP');
            INSERT INTO `cidades` VALUES ('5122', '14', 'Tailândia', 'PA');
            INSERT INTO `cidades` VALUES ('5123', '24', 'Taió', 'SC');
            INSERT INTO `cidades` VALUES ('5124', '13', 'Taiobeiras', 'MG');
            INSERT INTO `cidades` VALUES ('5125', '27', 'Taipas do Tocantins', 'TO');
            INSERT INTO `cidades` VALUES ('5126', '20', 'Taipu', 'RN');
            INSERT INTO `cidades` VALUES ('5127', '25', 'Taiúva', 'SP');
            INSERT INTO `cidades` VALUES ('5128', '27', 'Talismã', 'TO');
            INSERT INTO `cidades` VALUES ('5129', '17', 'Tamandaré', 'PE');
            INSERT INTO `cidades` VALUES ('5130', '16', 'Tamarana', 'PR');
            INSERT INTO `cidades` VALUES ('5131', '25', 'Tambaú', 'SP');
            INSERT INTO `cidades` VALUES ('5132', '16', 'Tamboara', 'PR');
            INSERT INTO `cidades` VALUES ('5133', '6', 'Tamboril', 'CE');
            INSERT INTO `cidades` VALUES ('5134', '18', 'Tamboril do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('5135', '25', 'Tanabi', 'SP');
            INSERT INTO `cidades` VALUES ('5136', '20', 'Tangará', 'RN');
            INSERT INTO `cidades` VALUES ('5137', '24', 'Tangará', 'SC');
            INSERT INTO `cidades` VALUES ('5138', '11', 'Tangará da Serra', 'MT');
            INSERT INTO `cidades` VALUES ('5139', '19', 'Tanguá', 'RJ');
            INSERT INTO `cidades` VALUES ('5140', '5', 'Tanhaçu', 'BA');
            INSERT INTO `cidades` VALUES ('5141', '2', 'Tanque d\'Arca', 'AL');
            INSERT INTO `cidades` VALUES ('5142', '18', 'Tanque do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('5143', '5', 'Tanque Novo', 'BA');
            INSERT INTO `cidades` VALUES ('5144', '5', 'Tanquinho', 'BA');
            INSERT INTO `cidades` VALUES ('5145', '13', 'Taparuba', 'MG');
            INSERT INTO `cidades` VALUES ('5146', '4', 'Tapauá', 'AM');
            INSERT INTO `cidades` VALUES ('5147', '16', 'Tapejara', 'PR');
            INSERT INTO `cidades` VALUES ('5148', '21', 'Tapejara', 'RS');
            INSERT INTO `cidades` VALUES ('5149', '21', 'Tapera', 'RS');
            INSERT INTO `cidades` VALUES ('5150', '5', 'Taperoá', 'BA');
            INSERT INTO `cidades` VALUES ('5151', '15', 'Taperoá', 'PB');
            INSERT INTO `cidades` VALUES ('5152', '21', 'Tapes', 'RS');
            INSERT INTO `cidades` VALUES ('5153', '13', 'Tapira', 'MG');
            INSERT INTO `cidades` VALUES ('5154', '16', 'Tapira', 'PR');
            INSERT INTO `cidades` VALUES ('5155', '13', 'Tapiraí', 'MG');
            INSERT INTO `cidades` VALUES ('5156', '25', 'Tapiraí', 'SP');
            INSERT INTO `cidades` VALUES ('5157', '5', 'Tapiramutá', 'BA');
            INSERT INTO `cidades` VALUES ('5158', '25', 'Tapiratiba', 'SP');
            INSERT INTO `cidades` VALUES ('5159', '11', 'Tapurah', 'MT');
            INSERT INTO `cidades` VALUES ('5160', '21', 'Taquara', 'RS');
            INSERT INTO `cidades` VALUES ('5161', '13', 'Taquaraçu de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('5162', '25', 'Taquaral', 'SP');
            INSERT INTO `cidades` VALUES ('5163', '9', 'Taquaral de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('5164', '2', 'Taquarana', 'AL');
            INSERT INTO `cidades` VALUES ('5165', '21', 'Taquari', 'RS');
            INSERT INTO `cidades` VALUES ('5166', '25', 'Taquaritinga', 'SP');
            INSERT INTO `cidades` VALUES ('5167', '17', 'Taquaritinga do Norte', 'PE');
            INSERT INTO `cidades` VALUES ('5168', '25', 'Taquarituba', 'SP');
            INSERT INTO `cidades` VALUES ('5169', '25', 'Taquarivaí', 'SP');
            INSERT INTO `cidades` VALUES ('5170', '21', 'Taquaruçu do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('5171', '12', 'Taquarussu', 'MS');
            INSERT INTO `cidades` VALUES ('5172', '25', 'Tarabai', 'SP');
            INSERT INTO `cidades` VALUES ('5173', '1', 'Tarauacá', 'AC');
            INSERT INTO `cidades` VALUES ('5174', '6', 'Tarrafas', 'CE');
            INSERT INTO `cidades` VALUES ('5175', '3', 'Tartarugalzinho', 'AP');
            INSERT INTO `cidades` VALUES ('5176', '25', 'Tarumã', 'SP');
            INSERT INTO `cidades` VALUES ('5177', '13', 'Tarumirim', 'MG');
            INSERT INTO `cidades` VALUES ('5178', '10', 'Tasso Fragoso', 'MA');
            INSERT INTO `cidades` VALUES ('5179', '25', 'Tatuí', 'SP');
            INSERT INTO `cidades` VALUES ('5180', '6', 'Tauá', 'CE');
            INSERT INTO `cidades` VALUES ('5181', '25', 'Taubaté', 'SP');
            INSERT INTO `cidades` VALUES ('5182', '15', 'Tavares', 'PB');
            INSERT INTO `cidades` VALUES ('5183', '21', 'Tavares', 'RS');
            INSERT INTO `cidades` VALUES ('5184', '4', 'Tefé', 'AM');
            INSERT INTO `cidades` VALUES ('5185', '15', 'Teixeira', 'PB');
            INSERT INTO `cidades` VALUES ('5186', '5', 'Teixeira de Freitas', 'BA');
            INSERT INTO `cidades` VALUES ('5187', '16', 'Teixeira Soares', 'PR');
            INSERT INTO `cidades` VALUES ('5188', '13', 'Teixeiras', 'MG');
            INSERT INTO `cidades` VALUES ('5189', '22', 'Teixeirópolis', 'RO');
            INSERT INTO `cidades` VALUES ('5190', '6', 'Tejuçuoca', 'CE');
            INSERT INTO `cidades` VALUES ('5191', '25', 'Tejupá', 'SP');
            INSERT INTO `cidades` VALUES ('5192', '16', 'Telêmaco Borba', 'PR');
            INSERT INTO `cidades` VALUES ('5193', '26', 'Telha', 'SE');
            INSERT INTO `cidades` VALUES ('5194', '20', 'Tenente Ananias', 'RN');
            INSERT INTO `cidades` VALUES ('5195', '20', 'Tenente Laurentino Cruz', 'RN');
            INSERT INTO `cidades` VALUES ('5196', '21', 'Tenente Portela', 'RS');
            INSERT INTO `cidades` VALUES ('5197', '15', 'Tenório', 'PB');
            INSERT INTO `cidades` VALUES ('5198', '5', 'Teodoro Sampaio', 'BA');
            INSERT INTO `cidades` VALUES ('5199', '25', 'Teodoro Sampaio', 'SP');
            INSERT INTO `cidades` VALUES ('5200', '5', 'Teofilândia', 'BA');
            INSERT INTO `cidades` VALUES ('5201', '13', 'Teófilo Otoni', 'MG');
            INSERT INTO `cidades` VALUES ('5202', '5', 'Teolândia', 'BA');
            INSERT INTO `cidades` VALUES ('5203', '2', 'Teotônio Vilela', 'AL');
            INSERT INTO `cidades` VALUES ('5204', '12', 'Terenos', 'MS');
            INSERT INTO `cidades` VALUES ('5205', '18', 'Teresina', 'PI');
            INSERT INTO `cidades` VALUES ('5206', '9', 'Teresina de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('5207', '19', 'Teresópolis', 'RJ');
            INSERT INTO `cidades` VALUES ('5208', '17', 'Terezinha', 'PE');
            INSERT INTO `cidades` VALUES ('5209', '9', 'Terezópolis de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('5210', '14', 'Terra Alta', 'PA');
            INSERT INTO `cidades` VALUES ('5211', '16', 'Terra Boa', 'PR');
            INSERT INTO `cidades` VALUES ('5212', '21', 'Terra de Areia', 'RS');
            INSERT INTO `cidades` VALUES ('5213', '5', 'Terra Nova', 'BA');
            INSERT INTO `cidades` VALUES ('5214', '17', 'Terra Nova', 'PE');
            INSERT INTO `cidades` VALUES ('5215', '11', 'Terra Nova do Norte', 'MT');
            INSERT INTO `cidades` VALUES ('5216', '16', 'Terra Rica', 'PR');
            INSERT INTO `cidades` VALUES ('5217', '16', 'Terra Roxa', 'PR');
            INSERT INTO `cidades` VALUES ('5218', '25', 'Terra Roxa', 'SP');
            INSERT INTO `cidades` VALUES ('5219', '14', 'Terra Santa', 'PA');
            INSERT INTO `cidades` VALUES ('5220', '11', 'Tesouro', 'MT');
            INSERT INTO `cidades` VALUES ('5221', '21', 'Teutônia', 'RS');
            INSERT INTO `cidades` VALUES ('5222', '22', 'Theobroma', 'RO');
            INSERT INTO `cidades` VALUES ('5223', '6', 'Tianguá', 'CE');
            INSERT INTO `cidades` VALUES ('5224', '16', 'Tibagi', 'PR');
            INSERT INTO `cidades` VALUES ('5225', '20', 'Tibau', 'RN');
            INSERT INTO `cidades` VALUES ('5226', '20', 'Tibau do Sul', 'RN');
            INSERT INTO `cidades` VALUES ('5227', '25', 'Tietê', 'SP');
            INSERT INTO `cidades` VALUES ('5228', '24', 'Tigrinhos', 'SC');
            INSERT INTO `cidades` VALUES ('5229', '24', 'Tijucas', 'SC');
            INSERT INTO `cidades` VALUES ('5230', '16', 'Tijucas do Sul', 'PR');
            INSERT INTO `cidades` VALUES ('5231', '17', 'Timbaúba', 'PE');
            INSERT INTO `cidades` VALUES ('5232', '20', 'Timbaúba dos Batistas', 'RN');
            INSERT INTO `cidades` VALUES ('5233', '24', 'Timbé do Sul', 'SC');
            INSERT INTO `cidades` VALUES ('5234', '10', 'Timbiras', 'MA');
            INSERT INTO `cidades` VALUES ('5235', '24', 'Timbó', 'SC');
            INSERT INTO `cidades` VALUES ('5236', '24', 'Timbó Grande', 'SC');
            INSERT INTO `cidades` VALUES ('5237', '25', 'Timburi', 'SP');
            INSERT INTO `cidades` VALUES ('5238', '10', 'Timon', 'MA');
            INSERT INTO `cidades` VALUES ('5239', '13', 'Timóteo', 'MG');
            INSERT INTO `cidades` VALUES ('5240', '21', 'Tio Hugo', 'RS');
            INSERT INTO `cidades` VALUES ('5241', '13', 'Tiradentes', 'MG');
            INSERT INTO `cidades` VALUES ('5242', '21', 'Tiradentes do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('5243', '13', 'Tiros', 'MG');
            INSERT INTO `cidades` VALUES ('5244', '26', 'Tobias Barreto', 'SE');
            INSERT INTO `cidades` VALUES ('5245', '27', 'Tocantínia', 'TO');
            INSERT INTO `cidades` VALUES ('5246', '27', 'Tocantinópolis', 'TO');
            INSERT INTO `cidades` VALUES ('5247', '13', 'Tocantins', 'MG');
            INSERT INTO `cidades` VALUES ('5248', '13', 'Tocos do Moji', 'MG');
            INSERT INTO `cidades` VALUES ('5249', '13', 'Toledo', 'MG');
            INSERT INTO `cidades` VALUES ('5250', '16', 'Toledo', 'PR');
            INSERT INTO `cidades` VALUES ('5251', '26', 'Tomar do Geru', 'SE');
            INSERT INTO `cidades` VALUES ('5252', '16', 'Tomazina', 'PR');
            INSERT INTO `cidades` VALUES ('5253', '13', 'Tombos', 'MG');
            INSERT INTO `cidades` VALUES ('5254', '14', 'Tomé-Açu', 'PA');
            INSERT INTO `cidades` VALUES ('5255', '4', 'Tonantins', 'AM');
            INSERT INTO `cidades` VALUES ('5256', '17', 'Toritama', 'PE');
            INSERT INTO `cidades` VALUES ('5257', '11', 'Torixoréu', 'MT');
            INSERT INTO `cidades` VALUES ('5258', '21', 'Toropi', 'RS');
            INSERT INTO `cidades` VALUES ('5259', '25', 'Torre de Pedra', 'SP');
            INSERT INTO `cidades` VALUES ('5260', '21', 'Torres', 'RS');
            INSERT INTO `cidades` VALUES ('5261', '25', 'Torrinha', 'SP');
            INSERT INTO `cidades` VALUES ('5262', '20', 'Touros', 'RN');
            INSERT INTO `cidades` VALUES ('5263', '25', 'Trabiju', 'SP');
            INSERT INTO `cidades` VALUES ('5264', '14', 'Tracuateua', 'PA');
            INSERT INTO `cidades` VALUES ('5265', '17', 'Tracunhaém', 'PE');
            INSERT INTO `cidades` VALUES ('5266', '2', 'Traipu', 'AL');
            INSERT INTO `cidades` VALUES ('5267', '14', 'Trairão', 'PA');
            INSERT INTO `cidades` VALUES ('5268', '6', 'Trairi', 'CE');
            INSERT INTO `cidades` VALUES ('5269', '19', 'Trajano de Moraes', 'RJ');
            INSERT INTO `cidades` VALUES ('5270', '21', 'Tramandaí', 'RS');
            INSERT INTO `cidades` VALUES ('5271', '21', 'Travesseiro', 'RS');
            INSERT INTO `cidades` VALUES ('5272', '5', 'Tremedal', 'BA');
            INSERT INTO `cidades` VALUES ('5273', '25', 'Tremembé', 'SP');
            INSERT INTO `cidades` VALUES ('5274', '21', 'Três Arroios', 'RS');
            INSERT INTO `cidades` VALUES ('5275', '24', 'Três Barras', 'SC');
            INSERT INTO `cidades` VALUES ('5276', '16', 'Três Barras do Paraná', 'PR');
            INSERT INTO `cidades` VALUES ('5277', '21', 'Três Cachoeiras', 'RS');
            INSERT INTO `cidades` VALUES ('5278', '13', 'Três Corações', 'MG');
            INSERT INTO `cidades` VALUES ('5279', '21', 'Três Coroas', 'RS');
            INSERT INTO `cidades` VALUES ('5280', '21', 'Três de Maio', 'RS');
            INSERT INTO `cidades` VALUES ('5281', '21', 'Três Forquilhas', 'RS');
            INSERT INTO `cidades` VALUES ('5282', '25', 'Três Fronteiras', 'SP');
            INSERT INTO `cidades` VALUES ('5283', '12', 'Três Lagoas', 'MS');
            INSERT INTO `cidades` VALUES ('5284', '13', 'Três Marias', 'MG');
            INSERT INTO `cidades` VALUES ('5285', '21', 'Três Palmeiras', 'RS');
            INSERT INTO `cidades` VALUES ('5286', '21', 'Três Passos', 'RS');
            INSERT INTO `cidades` VALUES ('5287', '13', 'Três Pontas', 'MG');
            INSERT INTO `cidades` VALUES ('5288', '9', 'Três Ranchos', 'GO');
            INSERT INTO `cidades` VALUES ('5289', '19', 'Três Rios', 'RJ');
            INSERT INTO `cidades` VALUES ('5290', '24', 'Treviso', 'SC');
            INSERT INTO `cidades` VALUES ('5291', '24', 'Treze de Maio', 'SC');
            INSERT INTO `cidades` VALUES ('5292', '24', 'Treze Tílias', 'SC');
            INSERT INTO `cidades` VALUES ('5293', '9', 'Trindade', 'GO');
            INSERT INTO `cidades` VALUES ('5294', '17', 'Trindade', 'PE');
            INSERT INTO `cidades` VALUES ('5295', '21', 'Trindade do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('5296', '15', 'Triunfo', 'PB');
            INSERT INTO `cidades` VALUES ('5297', '17', 'Triunfo', 'PE');
            INSERT INTO `cidades` VALUES ('5298', '21', 'Triunfo', 'RS');
            INSERT INTO `cidades` VALUES ('5299', '20', 'Triunfo Potiguar', 'RN');
            INSERT INTO `cidades` VALUES ('5300', '10', 'Trizidela do Vale', 'MA');
            INSERT INTO `cidades` VALUES ('5301', '9', 'Trombas', 'GO');
            INSERT INTO `cidades` VALUES ('5302', '24', 'Trombudo Central', 'SC');
            INSERT INTO `cidades` VALUES ('5303', '24', 'Tubarão', 'SC');
            INSERT INTO `cidades` VALUES ('5304', '5', 'Tucano', 'BA');
            INSERT INTO `cidades` VALUES ('5305', '14', 'Tucumã', 'PA');
            INSERT INTO `cidades` VALUES ('5306', '21', 'Tucunduva', 'RS');
            INSERT INTO `cidades` VALUES ('5307', '14', 'Tucuruí', 'PA');
            INSERT INTO `cidades` VALUES ('5308', '10', 'Tufilândia', 'MA');
            INSERT INTO `cidades` VALUES ('5309', '25', 'Tuiuti', 'SP');
            INSERT INTO `cidades` VALUES ('5310', '13', 'Tumiritinga', 'MG');
            INSERT INTO `cidades` VALUES ('5311', '24', 'Tunápolis', 'SC');
            INSERT INTO `cidades` VALUES ('5312', '21', 'Tunas', 'RS');
            INSERT INTO `cidades` VALUES ('5313', '16', 'Tunas do Paraná', 'PR');
            INSERT INTO `cidades` VALUES ('5314', '16', 'Tuneiras do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('5315', '10', 'Tuntum', 'MA');
            INSERT INTO `cidades` VALUES ('5316', '25', 'Tupã', 'SP');
            INSERT INTO `cidades` VALUES ('5317', '13', 'Tupaciguara', 'MG');
            INSERT INTO `cidades` VALUES ('5318', '17', 'Tupanatinga', 'PE');
            INSERT INTO `cidades` VALUES ('5319', '21', 'Tupanci do Sul', 'RS');
            INSERT INTO `cidades` VALUES ('5320', '21', 'Tupanciretã', 'RS');
            INSERT INTO `cidades` VALUES ('5321', '21', 'Tupandi', 'RS');
            INSERT INTO `cidades` VALUES ('5322', '21', 'Tuparendi', 'RS');
            INSERT INTO `cidades` VALUES ('5323', '17', 'Tuparetama', 'PE');
            INSERT INTO `cidades` VALUES ('5324', '16', 'Tupãssi', 'PR');
            INSERT INTO `cidades` VALUES ('5325', '25', 'Tupi Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('5326', '27', 'Tupirama', 'TO');
            INSERT INTO `cidades` VALUES ('5327', '27', 'Tupiratins', 'TO');
            INSERT INTO `cidades` VALUES ('5328', '10', 'Turiaçu', 'MA');
            INSERT INTO `cidades` VALUES ('5329', '10', 'Turilândia', 'MA');
            INSERT INTO `cidades` VALUES ('5330', '25', 'Turiúba', 'SP');
            INSERT INTO `cidades` VALUES ('5331', '13', 'Turmalina', 'MG');
            INSERT INTO `cidades` VALUES ('5332', '25', 'Turmalina', 'SP');
            INSERT INTO `cidades` VALUES ('5333', '21', 'Turuçu', 'RS');
            INSERT INTO `cidades` VALUES ('5334', '6', 'Tururu', 'CE');
            INSERT INTO `cidades` VALUES ('5335', '9', 'Turvânia', 'GO');
            INSERT INTO `cidades` VALUES ('5336', '9', 'Turvelândia', 'GO');
            INSERT INTO `cidades` VALUES ('5337', '16', 'Turvo', 'PR');
            INSERT INTO `cidades` VALUES ('5338', '24', 'Turvo', 'SC');
            INSERT INTO `cidades` VALUES ('5339', '13', 'Turvolândia', 'MG');
            INSERT INTO `cidades` VALUES ('5340', '10', 'Tutóia', 'MA');
            INSERT INTO `cidades` VALUES ('5341', '4', 'Uarini', 'AM');
            INSERT INTO `cidades` VALUES ('5342', '5', 'Uauá', 'BA');
            INSERT INTO `cidades` VALUES ('5343', '13', 'Ubá', 'MG');
            INSERT INTO `cidades` VALUES ('5344', '13', 'Ubaí', 'MG');
            INSERT INTO `cidades` VALUES ('5345', '5', 'Ubaíra', 'BA');
            INSERT INTO `cidades` VALUES ('5346', '5', 'Ubaitaba', 'BA');
            INSERT INTO `cidades` VALUES ('5347', '6', 'Ubajara', 'CE');
            INSERT INTO `cidades` VALUES ('5348', '13', 'Ubaporanga', 'MG');
            INSERT INTO `cidades` VALUES ('5349', '25', 'Ubarana', 'SP');
            INSERT INTO `cidades` VALUES ('5350', '5', 'Ubatã', 'BA');
            INSERT INTO `cidades` VALUES ('5351', '25', 'Ubatuba', 'SP');
            INSERT INTO `cidades` VALUES ('5352', '13', 'Uberaba', 'MG');
            INSERT INTO `cidades` VALUES ('5353', '13', 'Uberlândia', 'MG');
            INSERT INTO `cidades` VALUES ('5354', '25', 'Ubirajara', 'SP');
            INSERT INTO `cidades` VALUES ('5355', '16', 'Ubiratã', 'PR');
            INSERT INTO `cidades` VALUES ('5356', '21', 'Ubiretama', 'RS');
            INSERT INTO `cidades` VALUES ('5357', '25', 'Uchoa', 'SP');
            INSERT INTO `cidades` VALUES ('5358', '5', 'Uibaí', 'BA');
            INSERT INTO `cidades` VALUES ('5359', '23', 'Uiramutã', 'RR');
            INSERT INTO `cidades` VALUES ('5360', '9', 'Uirapuru', 'GO');
            INSERT INTO `cidades` VALUES ('5361', '15', 'Uiraúna', 'PB');
            INSERT INTO `cidades` VALUES ('5362', '14', 'Ulianópolis', 'PA');
            INSERT INTO `cidades` VALUES ('5363', '6', 'Umari', 'CE');
            INSERT INTO `cidades` VALUES ('5364', '20', 'Umarizal', 'RN');
            INSERT INTO `cidades` VALUES ('5365', '26', 'Umbaúba', 'SE');
            INSERT INTO `cidades` VALUES ('5366', '5', 'Umburanas', 'BA');
            INSERT INTO `cidades` VALUES ('5367', '13', 'Umburatiba', 'MG');
            INSERT INTO `cidades` VALUES ('5368', '15', 'Umbuzeiro', 'PB');
            INSERT INTO `cidades` VALUES ('5369', '6', 'Umirim', 'CE');
            INSERT INTO `cidades` VALUES ('5370', '16', 'Umuarama', 'PR');
            INSERT INTO `cidades` VALUES ('5371', '5', 'Una', 'BA');
            INSERT INTO `cidades` VALUES ('5372', '13', 'Unaí', 'MG');
            INSERT INTO `cidades` VALUES ('5373', '18', 'União', 'PI');
            INSERT INTO `cidades` VALUES ('5374', '21', 'União da Serra', 'RS');
            INSERT INTO `cidades` VALUES ('5375', '16', 'União da Vitória', 'PR');
            INSERT INTO `cidades` VALUES ('5376', '13', 'União de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('5377', '24', 'União do Oeste', 'SC');
            INSERT INTO `cidades` VALUES ('5378', '11', 'União do Sul', 'MT');
            INSERT INTO `cidades` VALUES ('5379', '2', 'União dos Palmares', 'AL');
            INSERT INTO `cidades` VALUES ('5380', '25', 'União Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('5381', '16', 'Uniflor', 'PR');
            INSERT INTO `cidades` VALUES ('5382', '21', 'Unistalda', 'RS');
            INSERT INTO `cidades` VALUES ('5383', '20', 'Upanema', 'RN');
            INSERT INTO `cidades` VALUES ('5384', '16', 'Uraí', 'PR');
            INSERT INTO `cidades` VALUES ('5385', '5', 'Urandi', 'BA');
            INSERT INTO `cidades` VALUES ('5386', '25', 'Urânia', 'SP');
            INSERT INTO `cidades` VALUES ('5387', '10', 'Urbano Santos', 'MA');
            INSERT INTO `cidades` VALUES ('5388', '25', 'Uru', 'SP');
            INSERT INTO `cidades` VALUES ('5389', '9', 'Uruaçu', 'GO');
            INSERT INTO `cidades` VALUES ('5390', '9', 'Uruana', 'GO');
            INSERT INTO `cidades` VALUES ('5391', '13', 'Uruana de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('5392', '14', 'Uruará', 'PA');
            INSERT INTO `cidades` VALUES ('5393', '24', 'Urubici', 'SC');
            INSERT INTO `cidades` VALUES ('5394', '6', 'Uruburetama', 'CE');
            INSERT INTO `cidades` VALUES ('5395', '13', 'Urucânia', 'MG');
            INSERT INTO `cidades` VALUES ('5396', '4', 'Urucará', 'AM');
            INSERT INTO `cidades` VALUES ('5397', '5', 'Uruçuca', 'BA');
            INSERT INTO `cidades` VALUES ('5398', '18', 'Uruçuí', 'PI');
            INSERT INTO `cidades` VALUES ('5399', '13', 'Urucuia', 'MG');
            INSERT INTO `cidades` VALUES ('5400', '4', 'Urucurituba', 'AM');
            INSERT INTO `cidades` VALUES ('5401', '21', 'Uruguaiana', 'RS');
            INSERT INTO `cidades` VALUES ('5402', '6', 'Uruoca', 'CE');
            INSERT INTO `cidades` VALUES ('5403', '22', 'Urupá', 'RO');
            INSERT INTO `cidades` VALUES ('5404', '24', 'Urupema', 'SC');
            INSERT INTO `cidades` VALUES ('5405', '25', 'Urupês', 'SP');
            INSERT INTO `cidades` VALUES ('5406', '24', 'Urussanga', 'SC');
            INSERT INTO `cidades` VALUES ('5407', '9', 'Urutaí', 'GO');
            INSERT INTO `cidades` VALUES ('5408', '5', 'Utinga', 'BA');
            INSERT INTO `cidades` VALUES ('5409', '21', 'Vacaria', 'RS');
            INSERT INTO `cidades` VALUES ('5410', '11', 'Vale de São Domingos', 'MT');
            INSERT INTO `cidades` VALUES ('5411', '22', 'Vale do Anari', 'RO');
            INSERT INTO `cidades` VALUES ('5412', '22', 'Vale do Paraíso', 'RO');
            INSERT INTO `cidades` VALUES ('5413', '21', 'Vale do Sol', 'RS');
            INSERT INTO `cidades` VALUES ('5414', '21', 'Vale Real', 'RS');
            INSERT INTO `cidades` VALUES ('5415', '21', 'Vale Verde', 'RS');
            INSERT INTO `cidades` VALUES ('5416', '5', 'Valença', 'BA');
            INSERT INTO `cidades` VALUES ('5417', '19', 'Valença', 'RJ');
            INSERT INTO `cidades` VALUES ('5418', '18', 'Valença do Piauí', 'PI');
            INSERT INTO `cidades` VALUES ('5419', '5', 'Valente', 'BA');
            INSERT INTO `cidades` VALUES ('5420', '25', 'Valentim Gentil', 'SP');
            INSERT INTO `cidades` VALUES ('5421', '25', 'Valinhos', 'SP');
            INSERT INTO `cidades` VALUES ('5422', '25', 'Valparaíso', 'SP');
            INSERT INTO `cidades` VALUES ('5423', '9', 'Valparaíso de Goiás', 'GO');
            INSERT INTO `cidades` VALUES ('5424', '21', 'Vanini', 'RS');
            INSERT INTO `cidades` VALUES ('5425', '24', 'Vargeão', 'SC');
            INSERT INTO `cidades` VALUES ('5426', '24', 'Vargem', 'SC');
            INSERT INTO `cidades` VALUES ('5427', '25', 'Vargem', 'SP');
            INSERT INTO `cidades` VALUES ('5428', '13', 'Vargem Alegre', 'MG');
            INSERT INTO `cidades` VALUES ('5429', '8', 'Vargem Alta', 'ES');
            INSERT INTO `cidades` VALUES ('5430', '13', 'Vargem Bonita', 'MG');
            INSERT INTO `cidades` VALUES ('5431', '24', 'Vargem Bonita', 'SC');
            INSERT INTO `cidades` VALUES ('5432', '10', 'Vargem Grande', 'MA');
            INSERT INTO `cidades` VALUES ('5433', '13', 'Vargem Grande do Rio Pardo', 'MG');
            INSERT INTO `cidades` VALUES ('5434', '25', 'Vargem Grande do Sul', 'SP');
            INSERT INTO `cidades` VALUES ('5435', '25', 'Vargem Grande Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('5436', '13', 'Varginha', 'MG');
            INSERT INTO `cidades` VALUES ('5437', '9', 'Varjão', 'GO');
            INSERT INTO `cidades` VALUES ('5438', '13', 'Varjão de Minas', 'MG');
            INSERT INTO `cidades` VALUES ('5439', '6', 'Varjota', 'CE');
            INSERT INTO `cidades` VALUES ('5440', '19', 'Varre-Sai', 'RJ');
            INSERT INTO `cidades` VALUES ('5441', '15', 'Várzea', 'PB');
            INSERT INTO `cidades` VALUES ('5442', '20', 'Várzea', 'RN');
            INSERT INTO `cidades` VALUES ('5443', '6', 'Várzea Alegre', 'CE');
            INSERT INTO `cidades` VALUES ('5444', '18', 'Várzea Branca', 'PI');
            INSERT INTO `cidades` VALUES ('5445', '13', 'Várzea da Palma', 'MG');
            INSERT INTO `cidades` VALUES ('5446', '5', 'Várzea da Roça', 'BA');
            INSERT INTO `cidades` VALUES ('5447', '5', 'Várzea do Poço', 'BA');
            INSERT INTO `cidades` VALUES ('5448', '11', 'Várzea Grande', 'MT');
            INSERT INTO `cidades` VALUES ('5449', '18', 'Várzea Grande', 'PI');
            INSERT INTO `cidades` VALUES ('5450', '5', 'Várzea Nova', 'BA');
            INSERT INTO `cidades` VALUES ('5451', '25', 'Várzea Paulista', 'SP');
            INSERT INTO `cidades` VALUES ('5452', '5', 'Varzedo', 'BA');
            INSERT INTO `cidades` VALUES ('5453', '13', 'Varzelândia', 'MG');
            INSERT INTO `cidades` VALUES ('5454', '19', 'Vassouras', 'RJ');
            INSERT INTO `cidades` VALUES ('5455', '13', 'Vazante', 'MG');
            INSERT INTO `cidades` VALUES ('5456', '21', 'Venâncio Aires', 'RS');
            INSERT INTO `cidades` VALUES ('5457', '8', 'Venda Nova do Imigrante', 'ES');
            INSERT INTO `cidades` VALUES ('5458', '20', 'Venha-Ver', 'RN');
            INSERT INTO `cidades` VALUES ('5459', '16', 'Ventania', 'PR');
            INSERT INTO `cidades` VALUES ('5460', '17', 'Venturosa', 'PE');
            INSERT INTO `cidades` VALUES ('5461', '11', 'Vera', 'MT');
            INSERT INTO `cidades` VALUES ('5462', '5', 'Vera Cruz', 'BA');
            INSERT INTO `cidades` VALUES ('5463', '20', 'Vera Cruz', 'RN');
            INSERT INTO `cidades` VALUES ('5464', '21', 'Vera Cruz', 'RS');
            INSERT INTO `cidades` VALUES ('5465', '25', 'Vera Cruz', 'SP');
            INSERT INTO `cidades` VALUES ('5466', '16', 'Vera Cruz do Oeste', 'PR');
            INSERT INTO `cidades` VALUES ('5467', '18', 'Vera Mendes', 'PI');
            INSERT INTO `cidades` VALUES ('5468', '21', 'Veranópolis', 'RS');
            INSERT INTO `cidades` VALUES ('5469', '17', 'Verdejante', 'PE');
            INSERT INTO `cidades` VALUES ('5470', '13', 'Verdelândia', 'MG');
            INSERT INTO `cidades` VALUES ('5471', '16', 'Verê', 'PR');
            INSERT INTO `cidades` VALUES ('5472', '5', 'Vereda', 'BA');
            INSERT INTO `cidades` VALUES ('5473', '13', 'Veredinha', 'MG');
            INSERT INTO `cidades` VALUES ('5474', '13', 'Veríssimo', 'MG');
            INSERT INTO `cidades` VALUES ('5475', '13', 'Vermelho Novo', 'MG');
            INSERT INTO `cidades` VALUES ('5476', '17', 'Vertente do Lério', 'PE');
            INSERT INTO `cidades` VALUES ('5477', '17', 'Vertentes', 'PE');
            INSERT INTO `cidades` VALUES ('5478', '13', 'Vespasiano', 'MG');
            INSERT INTO `cidades` VALUES ('5479', '21', 'Vespasiano Correa', 'RS');
            INSERT INTO `cidades` VALUES ('5480', '21', 'Viadutos', 'RS');
            INSERT INTO `cidades` VALUES ('5481', '21', 'Viamão', 'RS');
            INSERT INTO `cidades` VALUES ('5482', '8', 'Viana', 'ES');
            INSERT INTO `cidades` VALUES ('5483', '10', 'Viana', 'MA');
            INSERT INTO `cidades` VALUES ('5484', '9', 'Vianópolis', 'GO');
            INSERT INTO `cidades` VALUES ('5485', '17', 'Vicência', 'PE');
            INSERT INTO `cidades` VALUES ('5486', '21', 'Vicente Dutra', 'RS');
            INSERT INTO `cidades` VALUES ('5487', '12', 'Vicentina', 'MS');
            INSERT INTO `cidades` VALUES ('5488', '9', 'Vicentinópolis', 'GO');
            INSERT INTO `cidades` VALUES ('5489', '2', 'Viçosa', 'AL');
            INSERT INTO `cidades` VALUES ('5490', '13', 'Viçosa', 'MG');
            INSERT INTO `cidades` VALUES ('5491', '20', 'Viçosa', 'RN');
            INSERT INTO `cidades` VALUES ('5492', '6', 'Viçosa do Ceará', 'CE');
            INSERT INTO `cidades` VALUES ('5493', '21', 'Victor Graeff', 'RS');
            INSERT INTO `cidades` VALUES ('5494', '24', 'Vidal Ramos', 'SC');
            INSERT INTO `cidades` VALUES ('5495', '24', 'Videira', 'SC');
            INSERT INTO `cidades` VALUES ('5496', '13', 'Vieiras', 'MG');
            INSERT INTO `cidades` VALUES ('5497', '15', 'Vieirópolis', 'PB');
            INSERT INTO `cidades` VALUES ('5498', '14', 'Vigia', 'PA');
            INSERT INTO `cidades` VALUES ('5499', '11', 'Vila Bela da Santíssima Trindade', 'MT');
            INSERT INTO `cidades` VALUES ('5500', '9', 'Vila Boa', 'GO');            
        ]);
    }
}
