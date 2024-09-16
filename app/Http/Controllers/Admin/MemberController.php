<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Services\memberService;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    protected $memberService;

    public function __construct(memberService $memberService)
    {
        $this->memberService = $memberService;
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
            $this->memberService->createMembers($request);
            return redirect()->route('admin.member.index')->with('success', 'Member created successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to create Member: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('pages.admin.member.index')->with($notification);
        }
    }

    public function edit(Member $memberMember)
    {
        return view('pages.admin.member.edit', compact('memberMember'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->memberService->updateMembers($request, $id);
            return redirect()->route('admin.member.index')->with('success', 'Member updated successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Member: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.member.index')->with($notification);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->memberService->delete($id);

            $notification = [
                'message' => 'Member deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.member.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Member: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.member.index')->with($notification);
        }
    }
}
