<?php

namespace App\Enums;

enum Permissions: string
{
    case MEMO = 'memo';
    case CIRCULAR = 'circular';
    case NOTICES = 'notices';
    case WORKFLOW = 'workflow';
    case TASK = 'task';
    case TRAINING = 'training';
    case FLEET_SETUP = 'fleet_setup';
    case FLEET_MAINTENANCE = 'fleet_maintenance';
    case G_DRIVE = 'g_drive';
    case PROGRAMS = 'programs';
    case PROJECTS = 'projects';
    case PROCUREMENT = 'procurement';
    case CONTRACTORS = 'contractors';
    case FINANCE = 'finance';
    case HOD = 'hod';
    case CASH_RETIREMENT = 'cash_retirement';
    case AUTH_CASH_RETIREMENT = 'auth_cash_retirement';
    case APPROVE_CASH_RETIREMENT = 'approve_cash_retirement';
    case MEMO_APPROVAL = 'memo_approval';

    public function label(): string
    {
        return match ($this) {
            self::MEMO => 'Memo',
            self::CIRCULAR => 'Circular',
            self::NOTICES => 'Notices',
            self::WORKFLOW => 'Workflow',
            self::TASK => 'Task',
            self::TRAINING => 'Training',
            self::FLEET_SETUP => 'Fleet Setup',
            self::FLEET_MAINTENANCE => 'Fleet Maintenance',
            self::G_DRIVE => 'G-Drive',
            self::PROGRAMS => 'Programs',
            self::PROJECTS => 'Projects',
            self::PROCUREMENT => 'Procurement',
            self::CONTRACTORS => 'Contractors',
            self::FINANCE => 'Finance',
            self::HOD => 'HOD',
            self::CASH_RETIREMENT => 'Cash Retirement',
            self::AUTH_CASH_RETIREMENT => 'Auth Cash Retirement',
            self::APPROVE_CASH_RETIREMENT => 'Approve Cash Retirement',
            self::MEMO_APPROVAL => 'Memo Approval',
            default => 'Unknown'
        };
    }

    public static function all_permissions(): array
    {
        return [
            (object)['label' => self::MEMO->label(), 'value' => self::MEMO->value],
            (object)['label' => self::MEMO_APPROVAL->label(), 'value' => self::MEMO_APPROVAL->value],
            (object)['label' => self::CIRCULAR->label(), 'value' => self::CIRCULAR->value],
            (object)['label' => self::NOTICES->label(), 'value' => self::NOTICES->value],
            (object)['label' => self::WORKFLOW->label(), 'value' => self::WORKFLOW->value],
            (object)['label' => self::TASK->label(), 'value' => self::TASK->value],
            (object)['label' => self::TRAINING->label(), 'value' => self::TRAINING->value],
            (object)['label' => self::FLEET_SETUP->label(), 'value' => self::FLEET_SETUP->value],
            (object)['label' => self::FLEET_MAINTENANCE->label(), 'value' => self::FLEET_MAINTENANCE->value],
            (object)['label' => self::G_DRIVE->label(), 'value' => self::G_DRIVE->value],
            (object)['label' => self::PROGRAMS->label(), 'value' => self::PROGRAMS->value],
            (object)['label' => self::PROJECTS->label(), 'value' => self::PROJECTS->value],
            (object)['label' => self::PROCUREMENT->label(), 'value' => self::PROCUREMENT->value],
            (object)['label' => self::CONTRACTORS->label(), 'value' => self::CONTRACTORS->value],
            (object)['label' => self::FINANCE->label(), 'value' => self::FINANCE->value],
            (object)['label' => self::HOD->label(), 'value' => self::HOD->value],
            (object)['label' => self::CASH_RETIREMENT->label(), 'value' => self::CASH_RETIREMENT->value],
            (object)['label' => self::AUTH_CASH_RETIREMENT->label(), 'value' => self::AUTH_CASH_RETIREMENT->value],
            (object)['label' => self::APPROVE_CASH_RETIREMENT->label(), 'value' => self::APPROVE_CASH_RETIREMENT->value],
        ];
    }

}