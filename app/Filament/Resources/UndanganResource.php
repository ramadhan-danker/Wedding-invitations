<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Undangan;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\UndanganResource\Pages;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;

class UndanganResource extends Resource
{
    protected static ?string $model = Undangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('namaPriaLengkap')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('namaPerempuanLengkap')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('namaPanggilanPria')->searchable(),
                Tables\Columns\TextColumn::make('namaPanggilanPerempuan')->searchable(),
                Tables\Columns\TextColumn::make('namaBapakPerempuan')->searchable(),
                Tables\Columns\TextColumn::make('namaIbuPerempuan')->searchable(),
                Tables\Columns\TextColumn::make('namaIbuPria')->searchable(),
                Tables\Columns\TextColumn::make('namaBapakPria')->searchable(),
                Tables\Columns\TextColumn::make('alamat')->searchable()->wrap(),
                Tables\Columns\TextColumn::make('anakKeBerapaPria'),
                Tables\Columns\TextColumn::make('anakKeBerapaPerempuan'),
                Tables\Columns\TextColumn::make('map')->wrap()->words(1),
                Tables\Columns\TextColumn::make('linkMap')->wrap(),
                Tables\Columns\ImageColumn::make('fotoSampul'),
                Tables\Columns\ImageColumn::make('fotoAkhir'),
                Tables\Columns\ImageColumn::make('fotoPria'),
                Tables\Columns\ImageColumn::make('fotoWanita'),
                Tables\Columns\TextColumn::make('tanggalResepsi')
                    ->dateTime()->wrap(),
                Tables\Columns\TextColumn::make('tanggalAkadNikah')
                    ->dateTime()->wrap(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->wrap(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->wrap(),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUndangans::route('/'),
        ];
    }
}
