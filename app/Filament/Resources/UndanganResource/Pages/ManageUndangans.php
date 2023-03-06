<?php

namespace App\Filament\Resources\UndanganResource\Pages;

use Filament\Pages\Actions;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\UndanganResource;
use Filament\Forms\Components\DateTimePicker;

class ManageUndangans extends ManageRecords
{
    protected static string $resource = UndanganResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->steps([
                Step::make('Pengantin laki-laki')->schema([
                    TextInput::make('namaPriaLengkap')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('namaPanggilanPria')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('namaIbuPria')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('namaBapakPria')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('anakKeBerapaPria')
                        ->required()
                        ->maxLength(255),
                ])->columns(2),
                Step::make('Pengantin wanita')->schema([
                    TextInput::make('namaPerempuanLengkap')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('namaPanggilanPerempuan')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('namaBapakPerempuan')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('namaIbuPerempuan')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('anakKeBerapaPerempuan')
                        ->required()
                        ->maxLength(255),
                ])->columns(2),
                Step::make('Acara')->schema([
                    TextInput::make('alamat')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('linkMap')->maxLength(255)->required(),
                    FileUpload::make('fotoSampul')
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                            return (string) str($file->getClientOriginalName())->prepend('images/');
                        })->image()->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        }),
                    FileUpload::make('fotoAkhir')
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                            return (string) str($file->getClientOriginalName())->prepend('images/');
                        })->image()->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        }),
                    FileUpload::make('fotoPria')
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                            return (string) str($file->getClientOriginalName())->prepend('images/');
                        })->image()->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        }),
                    FileUpload::make('fotoWanita')
                        ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                            return (string) str($file->getClientOriginalName())->prepend('images/');
                        })->image()->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        }),
                    DateTimePicker::make('tanggalResepsi')
                        ->required(),
                    DateTimePicker::make('tanggalAkadNikah')
                        ->required(),
                    Textarea::make('map')->required(),
                ])->columns(2)
            ]),
        ];
    }
}
