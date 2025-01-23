<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;

Route::get("/login", [AuthController::class, "loginForm"])->name("login");
Route::post("/login", [AuthController::class, "loginAction"])->name(
    "login.action"
);

Route::middleware(["checkLogin"])->group(function () {
    Route::get("/", [BerandaController::class, "beranda"])->name("beranda");
    Route::get("/presensi", [BerandaController::class, "index"])->name(
        "presensi"
    );

    Route::get("/qrcode-scanner", [
        QrCodeController::class,
        "qrCodeScanner",
    ])->name("qrcode.scanner");
    Route::post("/qrcode-validasi", [
        QrCodeController::class,
        "validasiQrCode",
    ])->name("qrcode.validasi");

    Route::get("/logout", [AuthController::class, "logout"])->name("logout");

    Route::middleware(["checkRole"])->group(function () {
        Route::get("/generate-qr-code", [
            QrCodeController::class,
            "generate",
        ])->name("generate.qr.code");
    });
});
