<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactFormList;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactFormListController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_form_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-form-list.index');
    }

    public function create()
    {
        abort_if(Gate::denies('contact_form_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-form-list.create');
    }

    public function edit(ContactFormList $contactFormList)
    {
        abort_if(Gate::denies('contact_form_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-form-list.edit', compact('contactFormList'));
    }

    public function show(ContactFormList $contactFormList)
    {
        abort_if(Gate::denies('contact_form_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contact-form-list.show', compact('contactFormList'));
    }
}
