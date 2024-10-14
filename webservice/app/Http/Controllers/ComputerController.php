<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    // แสดงรายการคอมพิวเตอร์ทั้งหมด
    public function index()
    {
        $computers = Computer::all();
        return response()->json($computers, 200);
    }

    // สร้างคอมพิวเตอร์ใหม่
    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลที่ได้รับ
        $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'processor' => 'required|string',
            'ram' => 'required|integer',
            'storage' => 'required|string',
            'graphics_card' => 'required|string',
            'is_available' => 'required|boolean',
        ]);

        // สร้างข้อมูลใหม่
        $newComputer = Computer::create($request->all());

        // ส่งกลับข้อมูลที่สร้างใหม่พร้อมสถานะ 201
        return response()->json($newComputer, 201);
    }

    // แสดงคอมพิวเตอร์เฉพาะเจาะจง
    public function show($id)
    {
        $computer = Computer::find($id);

        if (!$computer) {
            return response()->json(['message' => 'Computer not found'], 404);
        }

        return response()->json($computer, 200);
    }

    // อัปเดตคอมพิวเตอร์
    public function update(Request $request, $id)
    {
        $computer = Computer::find($id);

        if (!$computer) {
            return response()->json(['message' => 'Computer not found'], 404);
        }

        $request->validate([
            'brand' => 'sometimes|required|string',
            'model' => 'sometimes|required|string',
            'processor' => 'sometimes|required|string',
            'ram' => 'sometimes|required|integer',
            'storage' => 'sometimes|required|string',
            'graphics_card' => 'sometimes|required|string',
            'is_available' => 'sometimes|required|boolean',
        ]);

        $computer->update($request->all());

        return response()->json($computer, 200);
    }

    // ลบคอมพิวเตอร์
    public function destroy($id)
{
    $computer = Computer::find($id);

    if (!$computer) {
        return response()->json(['message' => 'Computer not found'], 404);
    }

    $computer->delete();
    return response()->json(['message' => 'Computer deleted successfully']);
}

}
