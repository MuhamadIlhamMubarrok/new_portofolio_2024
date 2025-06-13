<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Services\MemberService;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    protected $MemberService;

    public function __construct(MemberService $MemberService)
    {
        $this->MemberService = $MemberService;
    }
    public function index(Request $request)
    {
        $search = $request->input('search', ''); 
        $member = Member::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')->orWhere('jabatan', 'like', '%' . $search . '%');
        })
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('pages.admin.member.index', compact('member', 'search'));
    }

    public function create()
    {
        return view('pages.admin.member.create');
    }

    public function store(Request $request)
    {
        try {
            $this->MemberService->createMembers($request);
            return redirect()->route('member.index')->with('success', 'Member created successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to create Member: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('pages.admin.member.index')->with($notification);
        }
    }

    public function edit(Member $member)
    {
        return view('pages.admin.member.edit', compact('member'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->MemberService->updateMembers($request, $id);
            return redirect()->route('member.index')->with('success', 'Member updated successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Member: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('member.index')->with($notification);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->MemberService->delete($id);

            $notification = [
                'message' => 'Member deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('member.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Member: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('member.index')->with($notification);
        }
    }
}
