<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'date',
        'file',
        'confirmed'
    ];

    /**
     * Set the file
     *
     * @param  string  $value
     * @return void
     */
    public function setFileAttribute($value)
    {
        if ($value->isFile()) {
            $fileName = time(). '_' . $value->getClientOriginalName();
            $value->storeAs('files', $fileName, 'public');

            return $this->attributes['file'] = $fileName;
        }
    }

    /**
     * Get the pelapor
     *
     * @param  string  $value
     * @return string
     */
    public function getPelaporAttribute($value)
    {
        return $this->user->name . ', ' . $this->user->position->name . ' desa ' . $this->user->village->name;
    }

    /**
     * Get the user that owns the Report
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the division that owns the Report
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
