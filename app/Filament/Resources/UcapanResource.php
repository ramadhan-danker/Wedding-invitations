<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Ucapan;
use Illuminate\Support\Arr;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Radio;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UcapanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UcapanResource\RelationManagers;
use App\Filament\Resources\UcapanResource\Widgets\UcapanStatsOverview;

class UcapanResource extends Resource
{
    protected static ?string $model = Ucapan::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('ucapan')->required(),
                Radio::make('hadir')
                    ->options([
                        'Saya Akan Hadir' => 'Saya Akan Hadir',
                        'Mohon Maaf Saya tidak Hadir' => 'Mohon Maaf Saya tidak Hadir',
                        'Saya Masih Ragu-Ragu' => 'Saya Masih Ragu-Ragu'
                    ])->required(),
                Radio::make('jumlahOrang')
                    ->options([
                        '0' => '0',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '>3' => '>3'
                    ])->required()
            ]);
    }

    public static function getWidgets(): array
    {
        return [
            UcapanStatsOverview::class
        ];
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('ucapan'),
                TextColumn::make('hadir'),
                TextColumn::make('jumlahOrang'),
                TextColumn::make('created_at'),
            ])
            ->filters([
                SelectFilter::make('hadir')
                    ->options([
                        'Saya Akan Hadir' => 'Hadir',
                        'Mohon Maaf Saya tidak Hadir' => 'Tidak Hadir',
                        'Saya Masih Ragu-Ragu' => 'Ragu-Ragu',
                    ])
                    ->label('Kehadiran')
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
            'index' => Pages\ManageUcapans::route('/'),
        ];
    }
}
