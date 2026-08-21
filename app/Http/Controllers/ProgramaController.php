<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    //
    // Datos simulados en memoria (Array asociativo)
    private $programas = [
        1 => [
            'id' => 1,
            'nombre' => 'Análisis y Desarrollo de Software',
            'tipo' => 'Tecnólogo',
            'duracion' => '27 Meses',
            'modalidad' => 'Presencial / Virtual',
            'descripcion' => 'Aprende a construir aplicaciones web, móviles y sistemas de software utilizando lenguajes modernos y bases de datos.',
            'imagen' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800'
        ],
        2 => [
            'id' => 2,
            'nombre' => 'Sistemas y Mantenimiento de Equipos',
            'tipo' => 'Técnico',
            'duracion' => '15 Meses',
            'modalidad' => 'Presencial',
            'descripcion' => 'Especialízate en ensamble de computadores, diagnóstico de hardware y cableado estructurado para redes de datos.',
            'imagen' => 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=800'
        ],
        3 => [
            'id' => 3,
            'nombre' => 'Gestión Empresarial',
            'tipo' => 'Tecnólogo',
            'duracion' => '24 Meses',
            'modalidad' => 'Virtual',
            'descripcion' => 'Adquiere conocimientos en administración de proyectos, finanzas, talento humano y procesos organizacionales.',
            'imagen' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800'
        ],
        4 => [
            'id' => 4,
            'nombre' => 'Producción de Contenidos Digitales',
            'tipo' => 'Tecnólogo',
            'duracion' => '24 Meses',
            'modalidad' => 'Presencial',
            'descripcion' => 'Crea contenido interactivo, animación 2D/3D, edición de video y diseño de interfaces de usuario (UI/UX).',
            'imagen' => 'https://images.unsplash.com/photo-1626785774573-4b799315345d'
        ],
        5 => [
            'id' => 5,
            'nombre' => 'Contabilización de Operaciones',
            'tipo' => 'Técnico',
            'duracion' => '15 Meses',
            'modalidad' => 'Virtual / Presencial',
            'descripcion' => 'Aprende sobre gestión financiera, nómina, tributaria e impuestos en plataformas contables empresariales.',
            'imagen' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c'
        ],
        6 => [
            'id' => 6,
            'nombre' => 'Seguridad de la Información y Redes',
            'tipo' => 'Tecnólogo',
            'duracion' => '27 Meses',
            'modalidad' => 'Presencial',
            'descripcion' => 'Protege datos corporativos, previene vulnerabilidades digitales y administra firewalls e infraestructura informática.',
            'imagen' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3'
        ],
        7 => [
            'id' => 7,
            'nombre' => 'Gestión del Talento Humano',
            'tipo' => 'Tecnólogo',
            'duracion' => '24 Meses',
            'modalidad' => 'Presencial / Virtual',
            'descripcion' => 'Coordinación de procesos de selección, contratación, nómina, bienestar laboral y desarrollo organizacional.',
            'imagen' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902'
        ],
        8 => [
            'id' => 8,
            'nombre' => 'Gestión Logística y Cadenas de Suministro',
            'tipo' => 'Tecnólogo',
            'duracion' => '24 Meses',
            'modalidad' => 'Virtual',
            'descripcion' => 'Administración de inventarios, almacenamiento, transporte y estrategias de distribución nacional e internacional.',
            'imagen' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d'
        ],
        9 => [
            'id' => 9,
            'nombre' => 'Mantenimiento Mecatrónico Automotriz',
            'tipo' => 'Técnico',
            'duracion' => '15 Meses',
            'modalidad' => 'Presencial',
            'descripcion' => 'Diagnóstico, mantenimiento preventivo y correctivo de sistemas mecánicos, eléctricos y electrónicos automotrices.',
            'imagen' => 'https://images.unsplash.com/photo-1486006920555-c77dce18193b'
        ],
        10 => [
            'id' => 10,
            'nombre' => 'Marketing Digital y Medios Publicitarios',
            'tipo' => 'Tecnólogo',
            'duracion' => '24 Meses',
            'modalidad' => 'Virtual / Presencial',
            'descripcion' => 'Diseño de estrategias de posicionamiento web, campañas publicitarias, gestión de redes sociales y analítica de datos.',
            'imagen' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f'
        ],
        11 => [
            'id' => 11,
            'nombre' => 'Control de Calidad en la Industria Alimentaria',
            'tipo' => 'Técnico',
            'duracion' => '15 Meses',
            'modalidad' => 'Presencial',
            'descripcion' => 'Supervisión de procesos de inocuidad, normatividad técnica (BPM) y análisis microbiológico de alimentos.',
            'imagen' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158'
        ],
        12 => [
            'id' => 12,
            'nombre' => 'Desarrollo de Videojuegos y Entornos Interactivos',
            'tipo' => 'Tecnólogo',
            'duracion' => '27 Meses',
            'modalidad' => 'Presencial',
            'descripcion' => 'Programación de mecánicas de juego, modelado 3D, animación y motores de desarrollo como Unity o Unreal Engine.',
            'imagen' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f'
        ],
    ];

    // Muestra todas las ofertas educativas
    public function index()
    {
        return view('programas.index', ['programas' => $this->programas]);
    }

    // Muestra los detalles de un programa específico por su ID
    public function show($id)
    {
        // Valida si el ID existe en el array
        if (!array_key_exists($id, $this->programas)) {
            abort(404, 'Programa no encontrado');
        }

        $programa = $this->programas[$id];

        return view('programas.show', compact('programa'));
    }
}
