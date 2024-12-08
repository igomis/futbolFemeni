<?php

namespace App\Policies;

use App\Models\Equip;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EquipPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Equip $equip): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role === 'administrador';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Equip $equip)
    {
        // Permetre si l'usuari és un manager i està assignat a aquest equip

        return $user->role === 'administrador' || ($user->role === 'manager' && $user->equip_id === $equip->id);
    }

    /**
     * Determina si l'usuari pot eliminar l'equip.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Equip $equip
     * @return bool
     */
    public function delete(User $user, Equip $equip)
    {
        // Només els administradors poden eliminar equips
        return $user->role === 'administrador';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Equip $equip): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Equip $equip): bool
    {
        //
    }
}
